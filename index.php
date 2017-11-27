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

            //document.getElementById(results).style.visibility = "visible";

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
                var myResult = "";

                for(i=0; i<response.results.length; i++){

                   // myResult += '<div class="div-container">';
                   // myResult += '<p class="p-title"> movie title: ' + response.results[i].original_title + '</p>';
                   // myResult += '<img class="poster" src="https://image.tmdb.org/t/p/w500/">' + response.results[i].poster_path;
                   // myResult += '<p class="p-overview">movie overview: ' +  response.results[i].overview + '</p>';
                   // myResult += '</div>';

                   obj1 += response.results[i].original_title + "<br>";

                   obj2 += response.results[i].poster_path + "<br>";

                  obj3 +=  response.results[i].overview + "<br>";

                }

                document.getElementById("movieTitle").innerHTML = obj1;
                document.getElementById("moviePoster").src += obj2;
                document.getElementById("movieOverview").innerHTML = obj3;

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
<div class="display" id="results">

    <p class="p-title" id="movieTitle"></p><br>

    <img class="poster" id="moviePoster" ><br> <!--src="https://image.tmdb.org/t/p/w500/"-->

    <p class="p-overview" id="movieOverview"></p>

</div>

<footer></footer>

</body>

</html>
