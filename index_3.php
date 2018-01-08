<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- mobile responsive -->
    <script src="jquery-3.2.1.js"></script>
    <script src="functions/now_playing_movies.js"></script>
    <script src="functions/search_functions.js"></script>
    <script src="functions/redirects.js"></script>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>



</head>


<body onload="nowPlayingMovies()">

<!--header for all pages made by bootstrap -->
<?php include('header_menu.php'); ?>

<div class="container container-body">
    <h1 class="title text-center text-success">Movies Info</h1>
    <h3 class="text-center text-info"><em>Movies In Theaters</em></h3>
    <div id="currentResults">
    </div>
</div>
<footer></footer>

</body>

</html>