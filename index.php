<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <script src="jquery-3.2.1.js"></script>

    <script>
        //Auto douleuei
        //document.getElementById("demo").innerHTML = movieSearch(userInput);
        function movieSearch(){
            var userInput = document.getElementById("search1").value;
            var a = document.getElementById("myID");
            a.href += userInput;
            document.getElementById("submit1").onclick = self.location=a.href;

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
        <input type="button" id="submit1" value="Submit" onclick="movieSearch()">
        <input type="button" id="submit2" value="Submit2">
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

    </table>
</div>


<footer></footer>

</body>

</html>
