<!DOCTYPE html>
<html>

<head>
    <title>MoviesInfo....</title>
    <link rel="stylesheet" type="text/css" href="MoviesInfo.css">
    <script src="jquery-3.2.1.js"></script>

    <script type="text/javascript">
        //Auto douleuei
        //document.getElementById("demo").innerHTML = movieSearch(userInput);
        function movieSearch(userInput){
            var urlObj = {href:"https://api.themoviedb.org/3/search/movie?api_key=b5456db86ace1556b60313e04972fc9f&query="}; //το url από το API που θα γίνει η κλήση (χωρίς το κείμενο του χρήστη)
            urlObj.href += userInput; //πρόσθεση κειμένου χρήστη στο url για αναζήτηση ταινίας
            document.getElementById("submit1").onclick = self.location= urlObj.href; //με το κλικ στο submit1 γίνεται η κλήση στο API με το ολοκληρωμένο url
            /*για να πάρουμε το JSON - δε δουλεύει!!!
            var myjson;
            $.getJSON("https://api.themoviedb.org/3/movie/550?api_key=b5456db86ace1556b60313e04972fc9f&callback=test", function(json){
                myjson = json;
            });
            console.log(myjson);*/
        }
    </script>

    <script>
        //script που τρέχει όταν πατηθεί το enter (κάνει search)
        window.addEventListener('keyup', function (e) {
            if (e.keyCode === 13) {
                movieSearch(document.getElementById("search1").value);
            }
        });
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

<p>Learn all about your favourite movies!</p><br>

<!-- Εδώ βρίσκεται το search box και το button για την εκκίνηση αναζήτησης -->
<div class = "TheSearch">
    <form>
        <input type="text" id="search1" name="search" autocomplete="off" placeholder="Start Searching!">
        <input type="button" id="submit1" value="Search" onclick="movieSearch(document.getElementById('search1').value)">
    </form>
</div><br>

<div class = "FrontPage">
    <table>
        <tr>
            <td><a href="https://api.themoviedb.org/3/movie/popular?api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1">popular movies!</a></td>
        </tr>

    </table>
</div>


<footer></footer>

</body>

</html>
