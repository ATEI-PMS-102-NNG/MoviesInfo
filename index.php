<!DOCTYPE html>
<html>

  <head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.js"></script>
    <script src="movieInfo_Functions.js"></script>

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
    <form>
        <input type="text" id="search1" name="search" autocomplete="off" placeholder="Start Searching!" onkeydown="enterSearch(event)">
        <input type="button" id="submit" value="Submit" onclick="movieSearch(3)">
    </form>
</div><br>

<!-- Εδώ βρίσκεται το button για την εμφάνιση των popular movies -->
<div class = "TheSearch">
    <p>See all the recent and most popular movies!</p>
    <input type="button" id="showPopular" value="Show Popular Movies!" onclick="redirectToIndex2()">
</div><br>

<div id="results">

</div>


<input type="button" id="showMoreButton" value="Show More Movies!" style = "display:none" onclick="movieSearch(100)">



</body>

</html>