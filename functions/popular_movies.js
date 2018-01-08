function popularMovies(){

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.themoviedb.org/3/movie/popular?page=1&language=en-US&api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1",
        "method": "GET",
        "headers": {},
        "data": "{}"
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
        var i, id;
        var obj1, obj2, obj3;
        var myPopular1, myPopular2, myPopular3="";
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

            id = response.results[i].id; //get id from movie

            //creating a <a> for the title and appending it into the DIV
            obj1 = response.results[i].original_title; //getting the original_title from table results that is in the returned Json data
            myPopular1 = document.createElement("A");
            myPopular1.innerHTML = obj1;
            myPopular1.href = "show_movie.php?id=" + id; //active link for full overview of movie --> send id of movie to page show_movie
            myPopular1.style.fontSize = "200%";
            document.getElementById("displayDiv").appendChild(myPopular1);

            document.getElementById("displayDiv").innerHTML += "<br>"; //break lines between movie title and image
            document.getElementById("displayDiv").innerHTML += "<br>";

            //creating an <img> for the poster and appending it into the DIV
            obj2 = response.results[i].poster_path; //getting the poster_path from table results that is in the returned Json data
            myPopular2 = document.createElement("IMG");
            myPopular2.src = "https://image.tmdb.org/t/p/w500/";
            myPopular2.src += obj2;
            myPopular2.style.height = "20%";
            myPopular2.style.width = "20%";
            document.getElementById("displayDiv").appendChild(myPopular2);

            //creating a <p> for the overview and appending it into the DIV
            obj3 = response.results[i].overview; //getting the overview from table results that is in the returned Json data
            myPopular3 = document.createElement("P");
            myPopular3.style.fontSize = "115%";
            myPopular3.innerHTML = obj3;
            document.getElementById("displayDiv").appendChild(myPopular3);
        }

    });

}