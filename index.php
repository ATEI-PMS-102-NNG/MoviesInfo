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


    <h1 class="title text-center">Movies Info</h1>

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
        <p>See all the recent and most popular movies</p>
        <input type="button" id="showPopular" value="Popular Movies" onclick="redirectToIndex2()">
        <p>See the movies that are currently playing in theaters</p>
        <input type="button" id="showCurrent" value="Movies in Theaters" onclick="redirectToIndex3()">
    </div><br>

    <div id="results">

    </div>


    <input type="button" id="showMoreButton" value="Show More Movies!" style = "display:none" onclick="movieSearch(100)">

    <p id="noResultsP"></p>
</body>

</html>