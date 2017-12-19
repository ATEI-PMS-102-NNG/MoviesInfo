<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.js"></script>
    <script src="movieInfo_Functions.js"></script>


</head>


<body onload="popularMovies()">

<!-- Εδώ βρίσκονται ο τίτλος και το logo που πατώντας το μας πηγαινει στο site τους -->
<div class = "TheHeader">
    <a href="https://www.themoviedb.org/" target="_blank">
        <img src="https://www.themoviedb.org/assets/static_cache/02a9430b88975cae16fcfcc9cf7b5799/images/v4/logos/primary-green.svg" >
    </a>
    <h1>Movie Info</h1><br>
</div>

<div id="popularResults">

</div>

<footer></footer>

</body>

</html>