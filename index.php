<!DOCTYPE html>
<html>

  <head>
      <title>MoviesInfo</title>
      <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- mobile responsive -->
      <script src="jquery-3.2.1.js"></script>
      <script src="functions/search_functions.js"></script>
      <script src="functions/redirects.js"></script>
      <script src="functions/enter_key.js"></script>
      <!-- Bootstrap library -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


  </head>


<body>
<!--header for all pages made by bootstrap -->
<?php include('header_menu.php'); ?>

<div class="container container-body">
    <h1 class="title text-center text-success">Movies Info</h1>

    <p class="text-center font-size20"><em>Learn all about your favourite movies!</em></p><br>

    <!-- Search box and button that searching movies -->
    <div class = "TheSearch">
        <form style="text-align: center">
            <input type="text" id="search1" name="search" autocomplete="off" placeholder="Start Searching!" onkeydown="enterSearch(event)">
            <br>
            <button id="submit" type="button" class="btn btn-success btn-lg" onclick="movieSearch(3)">Search</button> <!--large button using bootstrap graphics-->
        </form>
    </div><br>

    <!-- Buttons for popular movies and now playing movies -->
    <div class = "TheSearch">
        <div class="row">
            <!-- separate into 2 columns -->
            <div class="col-md-6">
                <h6 class="text-danger">See all the recent and most popular movies</h6>
                <button id="showPopular" type="button" class="btn btn-success" onclick="redirectToIndex2()">Popular Movies</button> <!--medium button using bootstrap graphics-->
            </div>
            <div class="col-md-6">
                <h6 class="text-danger">See the movies that are currently playing in theaters</h6>
                <button id="showCurrent" type="button" class="btn btn-success" onclick="redirectToIndex3()">Movies in Theaters</button> <!--medium button using bootstrap graphics-->
            </div>
        </div>


    </div><br>

    <div id="results">

    </div>
    <div style="text-align: center">
        <!--medium button for more movies - using bootstrap graphics-->
        <button id="showMoreButton" type="button" class="btn btn-success" style = "display:none" onclick="movieSearch(100)">Show More Movies!</button>
    </div>
    <p id="noResultsP"></p>
</div>
</body>

</html>