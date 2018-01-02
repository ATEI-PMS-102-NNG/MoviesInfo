//All functions

//enter key search
function enterSearch(e) {
    var code = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0; //for all browsers
    if(code===13){
        e.preventDefault(); //not refresh the page
        document.getElementById('submit').click() //search using ajax below
    }

    }

//jquery Request apo to documentation tou TMDB API
function f1(x){
    document.getElementById("results").innerHTML = ""; //clean previous search

    var userInput = document.getElementById("search1").value; //search text
    //build ajax settings
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query="+userInput, //query + search text
        "method": "GET",
        "headers": {},
        "data": "{}"
    };


    $.ajax(settings).done(function (response) {

        console.log(response);
        var i;
        var obj1, obj2, obj3, obj4, obj5;
        var myResult1, myResult2, myResult3="", myResult4,myResult5 ;
        var movieWrapper;

        for(i=0; i<x; i++) {
            //Making a DIV dynamically. In this DIV, the title, poster and overview of a movie is being displayed.
            movieWrapper = document.createElement("DIV");
            movieWrapper.id = "displayDiv";
            movieWrapper.style.textAlign = "center";
            movieWrapper.style.fontSize = "100%";
            movieWrapper.style.backgroundColor = "#f2f2f2";
            movieWrapper.style.margin = "auto";
            movieWrapper.style.width = "70%";
            movieWrapper.style.border = "3px solid #73AD21";
            document.getElementById("results").appendChild(movieWrapper);

            //creating an <a> for the title and appending it into the DIV
            obj1 = response.results[i].original_title; //getting the original_title from table results that is in the returned Json data
            myResult1 = document.createElement("A");
            myResult1.innerHTML = obj1; //insert movie title
            myResult1.style.fontSize = "36px";
            myResult1.href = "https://www.google.gr"; //active link for full overview of movie !!!For test I use google!!!
            document.getElementById("displayDiv").appendChild(myResult1);
            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between movie title and image

            //creating an <img> for the poster and appending it into the DIV.
            obj2 = response.results[i].poster_path; //getting the poster_path from table results that is in the returned Json data
            myResult2 = document.createElement("IMG");
            myResult2.src = "https://image.tmdb.org/t/p/w500/";
            myResult2.src += obj2;
            myResult2.style.height = "25%";
            myResult2.style.width = "25%";
            document.getElementById("displayDiv").appendChild(myResult2);
            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between image title and Release date

            // creating an <p> for the release date and appending it into the DIV
            obj4 = response.results[i].release_date; //getting the release_date from table results that is in the returned Json data
            myResult4 = document.createElement("rd");
            myResult4.innerHTML = obj4;
            document.getElementById("displayDiv").innerHTML += "Hμ/νία Κυκλοφορίας: ";
            document.getElementById("displayDiv").appendChild(myResult4);
            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between release date  title and vote average

            // creating an <p> for the rvote average and appending it into the DIV
            obj5 = response.results[i].vote_average; //getting the vote_average from table results that is in the returned Json data
            myResult5 = document.createElement("vote");
            myResult5.innerHTML = obj5;
            document.getElementById("displayDiv").innerHTML += "Βαθμολογία: ";
            document.getElementById("displayDiv").appendChild(myResult5);

            //creating a <p> for the overview and appending it into the DIV
            obj3 = response.results[i].overview; //getting the overview from table results that is in the returned Json data
            myResult3 = document.createElement("P");
            myResult3.innerHTML = obj3;
            document.getElementById("displayDiv").appendChild(myResult3);

        }

        document.getElementById("showMoreButton").style.display = "block";
    });
}

function popularMovies(){

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/movie/popular?page=1&language=en-US&api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1",
        "method": "GET",
        "headers": {},
        "data": "{}"
    }

    $.ajax(settings).done(function (response) {
        console.log(response);
        var i;
        var obj1, obj2, obj3, obj4, obj5;
        var myPopular1, myPopular2, myPopular3="", myPopular4, myPopular5;
        var movieWrapper2;

        for(i=0; i<response.results.length; i++) {

            //Making a DIV dynamically. In this DIV, the title, poster and overview of a movie is being displayed.
            movieWrapper2 = document.createElement("DIV");
            movieWrapper2.id = "displayDiv";
            movieWrapper2.style.textAlign = "center";
            movieWrapper2.style.fontSize = "100%";
            movieWrapper2.style.backgroundColor = "#f2f2f2";
            movieWrapper2.style.margin = "auto";
            movieWrapper2.style.width = "70%";
            movieWrapper2.style.border = "3px solid #73AD21";
            document.getElementById("popularResults").appendChild(movieWrapper2);

            //creating a <p> for the title and appending it into the DIV
            obj1 = response.results[i].original_title; //getting the original_title from table results that is in the returned Json data
            myPopular1 = document.createElement("P");
            myPopular1.innerHTML = obj1;
            myPopular1.style.fontSize = "36px";
            document.getElementById("displayDiv").appendChild(myPopular1);

           //creating an <img> for the poster and appending it into the DIV
            obj2 = response.results[i].poster_path; //getting the poster_path from table results that is in the returned Json data
            myPopular2 = document.createElement("IMG");
            myPopular2.src = "https://image.tmdb.org/t/p/w500/";
            myPopular2.src += obj2;
            myPopular2.style.height = "25%";
            myPopular2.style.width = "25%";
            document.getElementById("displayDiv").appendChild(myPopular2);

            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between movie image and Release date

            //creating an <p> for the release date and appending it into the DIV
            obj4 = response.results[i].release_date; //getting the release_date from table results that is in the returned Json data
            myPopular4 = document.createElement("rd");
            myPopular4.innerHTML = obj4;
            document.getElementById("displayDiv").innerHTML += "Hμ/νία Κυκλοφορίας: ";
            document.getElementById("displayDiv").appendChild(myPopular4);

            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between Release date and vote average

            // creating an <img> for the poster and appending it into the DIV
            obj5 = response.results[i].vote_average; //getting the poster_path from table results that is in the returned Json data
            myPopular5 = document.createElement("vote");
            myPopular5.innerHTML = obj5;
            document.getElementById("displayDiv").innerHTML += "Βαθμολογία: ";
            document.getElementById("displayDiv").appendChild(myPopular5);

            //creating a <p> for the overview and appending it into the DIV
            obj3 = response.results[i].overview; //getting the overview from table results that is in the returned Json data
            myPopular3 = document.createElement("P");
            myPopular3.innerHTML = obj3;
            document.getElementById("displayDiv").appendChild(myPopular3);
        }

    });

}

function redirectToIndex2(){
    window.location = "index_2.php";
}


function gotToHomePage(){
    window.location = "index.php";
}


