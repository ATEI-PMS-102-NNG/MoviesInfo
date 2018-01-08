
//jquery Request apo to documentation tou TMDB API
function movieSearch(x) {
    document.getElementById("results").innerHTML = ""; //clean previous search

    var userInput = document.getElementById("search1").value; //search text
    var empty_search = "Ooops! You didn't insert a movie at search box!";
    //build ajax settings
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query=" + userInput, //query + search text
        "method": "GET",
        "headers": {},
        "data": "{}"
    };
    //check if user input is empty and show message
    if (userInput === "") {
        document.getElementById("noResultsP").innerHTML = empty_search;
        $("#showMoreButton").hide();
    }
    else {


        $.ajax(settings).done(function (response) {

            console.log(response);
            var i, id;
            var obj1, obj2, obj3;
            var myResult1, myResult2, myResult3 = "";
            var movieWrapper;
            var array_length, loops;
            var obj5 = "Ooops! we couldn't find any movies that match your search!";

            //checking -> if the users's search doesn't mach any results, show an informative message to the user
            if (response.total_results === 0) {
                document.getElementById("noResultsP").innerHTML = obj5;
                $("#showMoreButton").hide();
            }
            else {
                //check the number of results, show more button, declare loops
                array_length = response.results.length;
                if (x === 3 && array_length <= 3) {
                    loops = array_length;
                }
                else if (x === 3 && array_length > 3) {
                    loops = 3;
                    $("#showMoreButton").show();
                }
                else if (x === 3 && array_length === 3) {
                    loops = 3;
                }
                else {
                    loops = array_length;
                    $("#showMoreButton").hide();
                }
                for (i = 0; i < loops; i++) {

                    $("#noResultsP").empty(); //there is a movie that match the user's input, so make this message empty

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
                    myResult1.style.fontSize = "200%";
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
                    myResult3.style.fontSize = "115%";
                    myResult3.innerHTML = obj3;
                    document.getElementById("displayDiv").appendChild(myResult3);
                }
            }


            //document.getElementById("showMoreButton").style.display = "block";
        });
    }
}

function showMovieWithID(id){
    document.getElementById("movieShow").innerHTML = ""; //clean previous search

    //build ajax settings
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/movie/" + id + "?api_key=b5456db86ace1556b60313e04972fc9f&append_to_response=credits", //query with specific id
        "method": "GET",
        "headers": {},
        "data": "{}"
    };


    $.ajax(settings).done(function (response) {

        console.log(response);
        var obj1, obj2, obj3, obj4, obj5, obj6, obj7, obj8;
        var myResult1, myResult2, myResult3, myResult4, myResult5, myResult6, myResult7, myResult8;
        var movieWrapper, i, j, k, genreLabel, actorsLabel;


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
        myResult1.style.fontSize = "200%";
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
        myResult3.style.fontSize = "115%";
        myResult3.innerHTML = obj3;
        document.getElementById("displayDiv").appendChild(myResult3);

        //movie release date
        obj4 = response.release_date;
        myResult4 = document.createElement("P");
        myResult4.innerHTML = "Release Date: " + obj4;
        myResult4.style.fontSize = "125%";
        document.getElementById("displayDiv").appendChild(myResult4);

        //movie popularity
        obj5 = response.popularity;
        k = obj5.toFixed(2); //we let only 2 decimals show from the popularity number
        myResult5 = document.createElement("P");
        myResult5.innerHTML = "Popularity: " + k;
        myResult5.style.fontSize = "125%";

        document.getElementById("displayDiv").appendChild(myResult5);

        //movie vote average
        obj6 = response.vote_average;
        myResult6 = document.createElement("P");
        myResult6.innerHTML = "Average Vote: " + obj6;
        myResult6.style.fontSize = "125%";
        document.getElementById("displayDiv").appendChild(myResult6);

        //movie Genres
        genreLabel = document.createElement("P");
        genreLabel.innerHTML="Genres: ";
        genreLabel.style.fontSize = "125%";
        document.getElementById("displayDiv").appendChild(genreLabel);
        for(i=0; i<response.genres.length; i++){
            obj7 = response.genres[i].name;
            myResult7 = document.createElement("P");
            myResult7.innerHTML = obj7 + ", ";
            myResult7.style.fontSize = "100%";
            myResult7.style.display = "inline";
            document.getElementById("displayDiv").appendChild(myResult7);
        }

        //changing line
        var mybr = document.createElement('br');
        document.getElementById("displayDiv").appendChild(mybr);

        //movie cast-actors
        actorsLabel = document.createElement("P");
        actorsLabel.innerHTML="Actors: ";
        actorsLabel.style.fontSize = "120%";
        document.getElementById("displayDiv").appendChild(actorsLabel);
        for(j=0; j<response.credits.cast.length; j++){
            obj8 = response.credits.cast[j].name;
            myResult8 = document.createElement("P");
            myResult8.innerHTML = obj8 + ", ";
            myResult8.style.fontSize = "100%";
            myResult8.style.display = "inline";
            document.getElementById("displayDiv").appendChild(myResult8);
        }

    });
}


