<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <script src="jquery-3.2.1.js"></script>
    <!-- Script που θα πάρει το πεδίο που θα πληκτρολογήσει ο χρήστης για να ψάξει για την ταινία - δε δουλεύει!!
    <script>
        function movieSearch(input){

        }
    </script>

    <!-- Jquery ερώτημα για να αλλάξει τη το περιεχόμενο του jReturn div - δε δουλεύει!!
    $(document).ready(function(){
        $("submit1").click(function(){
            $("#jReturn").append("a");
        });
    });-->

</head>

<body>

<!-- Εδώ βρίσκονται ο τίτλος και το logo που πατώντας το μας πηγαινει στο site τους -->
<div class = "TheHeader">
    <a href="https://www.themoviedb.org/" target="_blank">
        <img src="https://www.themoviedb.org/assets/static_cache/02a9430b88975cae16fcfcc9cf7b5799/images/v4/logos/primary-green.svg" >
    </a>
    <h1>Movie Info</h1><br>
</div>

<p>Learn all about your favourite movies!</p><br>

<!-- Εδώ βρίσκεται το search box και το button για την εκκίνηση αναζήτησης -->
<div class = "TheSearch">
    <form id="searchMovie" method="post">
        <!-- Προσπάθεια να δουλέψει η αναζήτηση με το action αλλά δεν μπορώ να πάρω δυναμικά το πεδίο που πληκτρολογεί ο χρήστης
        action="https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&query=thor&page=1&include_adult=false"> -->
        <input type="text" id="search1" name="search" placeholder="Start Searching!">
        <input type="submit" id="submit1" value="Submit" >
        <!-- Με αυτό θα ενεργοποιηθεί η μέθοδος για να ψάξει την ταινία onclick="movieSearch(document.getElementById('search1').value)"> -->
    </form>
</div><br>

<div class = "FrontPage">
    <table>
        <tr>
            <td><a href="https://api.themoviedb.org/3/movie/tt3501632?api_key=b5456db86ace1556b60313e04972fc9f&append_to_response=videos,images">Information about Thor movie</a></td>
        </tr>
        <tr>
            <td><a href = "http://api.themoviedb.org/3/movie/47933?api_key=b5456db86ace1556b60313e04972fc9f"> Information for Independence Day Collection</a></td>
        </tr>
        <tr>
            <td><a href="https://api.themoviedb.org/3/genre/movie/list?api_key=b5456db86ace1556b60313e04972fc9f&callback=jQuery22408132628371243029_1471207855881&_=1471207855884">a test with a jquery</a></td>
        </tr>
        <tr>
            <td><a href="https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query=Jack+Reacher">Information for Jack Reacher movie</a></td>
        </tr>
        <tr>
            <td><a id="searchLink" href="https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query=userInput">a test with a query</a></td>
        </tr>
        <tr>
            <td><a href="http://api.themoviedb.org/3/movie/47933/images?api_key=b5456db86ace1556b60313e04972fc9f">information for images</a></td><!--nomizw lathos proseggish gia eikona-->
        </tr>
        <tr>
            <td><a href="https://api.themoviedb.org/3/find/tt0944947?api_key=b5456db86ace1556b60313e04972fc9f&external_source=imdb_id">information from external source</a></td><!--nomizw lathos proseggish gia eikona-->
        </tr>
        <tr>
            <td><a href="https://image.tmdb.org/t/p/w500/kqjL17yufvn9OVLyXYpvtyrFfak.jpg">image from Mad Max</a></td>
        </tr>
    </table>
</div>

<div id="jReturn">

</div>

<footer></footer>



<!-- https://image.tmdb.org/t/p/w500/kqjL17yufvn9OVLyXYpvtyrFfak.jpg -->
<!-- https://api.themoviedb.org/3/configuration?api_key=<<api_key>> -->
<!-- https://api.themoviedb.org/3/search/movie?api_key=<<api_key>>&language=en-US&page=1&include_adult=false -->
<!-- our API key is : b5456db86ace1556b60313e04972fc9f -->
</body>

</html>
