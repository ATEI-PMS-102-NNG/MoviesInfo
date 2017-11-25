<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.js"></script>

    <script>


        //Paradeigma xmlHTTP Request apo to documentation tou TMDB API
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
                document.getElementById("results").innerHTML = response.results[0].original_title;
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

<div class = "FrontPage">
    <table>

        <tr class="collapse"><!-- Αυτο το εχουμε κανει να μη φαινεται -->
            <td><a id="myID" href="https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query=">The Search link</a></td>
        </tr>
        <tr>
            <td><a href="https://api.themoviedb.org/3/movie/popular?api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1">popular movies!</a></td>
        </tr>
        <tr>
            <td><a href="https://api.themoviedb.org/3/movie/157336?api_key=b5456db86ace1556b60313e04972fc9f&append_to_response=videos,images"> Videos and Images... </a></td>

        </tr>

    </table>
</div>

<br>
<!-- Edw emfanizetai o titlos tainias -->
<div class="display" id="results">

</div>

<footer></footer>

</body>

</html>
