<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.js"></script>

    <script>


        //jquery Request apo to documentation tou TMDB API
        function f1(){
            var userInput = document.getElementById("search1").value;
            var settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query="+userInput,
                "method": "GET",
                "headers": {},
                "data": "{}"
            };


            $.ajax(settings).done(function (response) {

                console.log(response);
                var i;
                var obj1, obj2, obj3;
                var myResult1, myResult2, myResult3="";
                var movieWrapper;

                for(i=0; i<3; i++){
                    //Making a DIV dynamically. In this DIV, the title, poster and overview of a movie is being displayed.
                    movieWrapper = document.createElement("DIV");
                    movieWrapper.id = "displayDiv";
                    movieWrapper.style.textAlign = "center";
                    movieWrapper.style.fontSize = "100%";
                    movieWrapper.style.backgroundColor = "#f2f2f2";
                    movieWrapper.style.margin = "auto";
                    movieWrapper.style.width = "70%";
                    movieWrapper.style.border = "3px solid #73AD21";
                    document.body.appendChild(movieWrapper);

                    //creating a <p> for the title and appending it into the DIV
                    obj1 = response.results[i].original_title; //getting the original_title from table results that is in the returned Json data
                    myResult1 = document.createElement("P");
                    myResult1.innerHTML = obj1;
                    document.getElementById("displayDiv").appendChild(myResult1);

                    //creating an <img> for the poster and appending it into the DIV
                    obj2 = response.results[i].poster_path; //getting the poster_path from table results that is in the returned Json data
                    myResult2 = document.createElement("IMG");
                    myResult2.src = "https://image.tmdb.org/t/p/w500/";
                    myResult2.src += obj2;
                    document.getElementById("displayDiv").appendChild(myResult2);

                    //creating a <p> for the overview and appending it into the DIV
                    obj3 = response.results[i].overview; //getting the overview from table results that is in the returned Json data
                    myResult3 = document.createElement("P");
                    myResult3.innerHTML = obj3;
                    document.getElementById("displayDiv").appendChild(myResult3);

                    //here is a non-dynamically approach
                  //  obj1 += response.results[i].original_title + "<br>";

                  // obj2 += response.results[i].poster_path + "<br>";

                  // obj3 +=  response.results[i].overview + "<br>";

                }

                //document.getElementById("movieTitle").innerHTML = obj1;
                //document.getElementById("moviePoster").src += obj2;
                //document.getElementById("movieOverview").innerHTML = obj3;

            });


        }



    </script>


</head>



<body>





<!-- Εδώ βρίσκονται ο τίτλος και το logo που πατώντας το μας πηγαινει στο site τους -->
<div class = "TheHeader">
    <a href="https://www.themoviedb.org/" target="_blank">
        <img src="https://www.themoviedb.org/assets/static_cache/02a9430b88975cae16fcfcc9cf7b5799/images/v4/logos/primary-green.svg" >
    </a>
    <h1>Movie Info</h1><br>
</div>

<p>Learn all about yout favourite movies!</p><br>

<!-- Εδώ βρίσκεται το search box και το button για την εκκίνηση αναζήτησης -->
<div class = "TheSearch">
    <form>
        <input type="text" id="search1" name="search" autocomplete="off" placeholder="Start Searching!">
        <input type="button" id="submit" value="Submit" onclick="f1()">
    </form>
</div><br>



<br>

<!-- Edw emfanizontai stoixeia tainias -->
<!--<div  id="results" class="display">

    <div class="c1">
        <p class="p-title" id="movieTitle"></p><br>
    </div><br>
    <div class="c2">
        <img class="poster" id="moviePoster" ><br>
    </div><br>
    <div class="c3">
        <p class="p-overview" id="movieOverview"></p>
    </div>

</div>-->

<!--src="https://image.tmdb.org/t/p/w500/"-->




<footer></footer>

</body>

</html>
