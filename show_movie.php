<!DOCTYPE html>
<html>

<head>
    <title>Show Movie</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <script src="jquery-3.2.1.js"></script>
    <script src="movieInfo_Functions.js"></script>
    <script type="text/javascript">
    var movie_id;
    movie_id = <?php echo $_GET["id"]; ?>; //get movie id from url
    </script>

</head>


<body onload="f2(movie_id)">

<!-- Εδώ βρίσκονται ο τίτλος και το logo που πατώντας το μας πηγαινει στο site τους -->
<div class = "TheHeader">
    <a href="https://www.themoviedb.org/" target="_blank">
        <img src="https://www.themoviedb.org/assets/static_cache/02a9430b88975cae16fcfcc9cf7b5799/images/v4/logos/primary-green.svg" >
    </a>
    <h1>Movie Info</h1><br>
</div>

<div id="movieShow"></div>

<script type="text/javascript">



</script>

<footer></footer>

</body>

</html>