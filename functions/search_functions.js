
//jquery Request apo to documentation tou TMDB API
function movieSearch(x){
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
        var i, id;
        var obj1, obj2, obj3, obj4;
        var myResult1, myResult2, myResult3="";
        var movieWrapper;
        var obj5 = "Ooops! we couldn't find any movies that matches your search!";

        //checking -> if the users's search doesn't mach any results, show an informative message to the user
        if(response.total_results === 0){
            obj4 = document.createElement("P");
            obj4.class = "obj4Class";
            obj4.innerHTML = obj5;
            document.body.appendChild(obj4);
        }

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

            id = response.results[i].id; //get id from movie

            //creating an <a> for the title and appending it into the DIV
            obj1 = response.results[i].original_title; //getting the original_title from table results that is in the returned Json data
            myResult1 = document.createElement("A");
            myResult1.innerHTML = obj1; //insert movie title
            myResult1.href = "show_movie.php?id=" + id; //active link for full overview of movie --> send id of movie to page show_movie
            myResult1.style.fontSize = "36px";
            document.getElementById("displayDiv").appendChild(myResult1);

            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between movie title and image
            document.getElementById("displayDiv").innerHTML += "<br>";

            //creating an <img> for the poster and appending it into the DIV
            obj2 = response.results[i].poster_path; //getting the poster_path from table results that is in the returned Json data
            myResult2 = document.createElement("IMG");
            myResult2.src = "https://image.tmdb.org/t/p/w500/";
            myResult2.src += obj2;
            myResult2.style.height = "20%";
            myResult2.style.width = "20%";
            document.getElementById("displayDiv").appendChild(myResult2);

            //creating a <p> for the overview and appending it into the DIV
            obj3 = response.results[i].overview; //getting the overview from table results that is in the returned Json data
            myResult3 = document.createElement("P");
            myResult3.innerHTML = obj3;
            document.getElementById("displayDiv").appendChild(myResult3);
        }

        document.getElementById("showMoreButton").style.display = "block";
    });
}

function showMovieWithID(id){
    document.getElementById("movieShow").innerHTML = ""; //clean previous search

    //build ajax settings
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/movie/" + id + "?api_key=b5456db86ace1556b60313e04972fc9f", //query with specific id
        "method": "GET",
        "headers": {},
        "data": "{}"
    };


    $.ajax(settings).done(function (response) {

        console.log(response);
        var obj1, obj2, obj3;
        var myResult1, myResult2, myResult3="";
        var movieWrapper;

        //Making a DIV dynamically. In this DIV, the title, poster and overview of a movie is being displayed.
        movieWrapper = document.createElement("DIV");
        movieWrapper.id = "displayDiv";
        movieWrapper.style.textAlign = "center";
        movieWrapper.style.fontSize = "100%";
        movieWrapper.style.backgroundColor = "#f2f2f2";
        movieWrapper.style.margin = "auto";
        movieWrapper.style.width = "70%";
        movieWrapper.style.border = "3px solid #73AD21";
        document.getElementById("movieShow").appendChild(movieWrapper);

        //creating a <p> for the title and appending it into the DIV
        obj1 = response.original_title; //getting the original_title in the returned Json data
        myResult1 = document.createElement("P");
        myResult1.innerHTML = obj1; //insert movie title
        myResult1.style.fontSize = "36px";
        document.getElementById("displayDiv").appendChild(myResult1);

        //creating an <img> for the poster and appending it into the DIV
        obj2 = response.poster_path; //getting the poster_path in the returned Json data
        myResult2 = document.createElement("IMG");
        myResult2.src = "https://image.tmdb.org/t/p/w500/";
        myResult2.src += obj2;
        myResult2.style.height = "20%";
        myResult2.style.width = "20%";
        document.getElementById("displayDiv").appendChild(myResult2);

        //creating a <p> for the overview and appending it into the DIV
        obj3 = response.overview; //getting the overview in the returned Json data
        myResult3 = document.createElement("P");
        myResult3.innerHTML = obj3;
        document.getElementById("displayDiv").appendChild(myResult3);
    });
}


