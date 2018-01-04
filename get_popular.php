<?php
/**
// link_correction: Call to server for position correction station
Εντοπισμός των δημοφιλέστερων ταινιών απο το API της The Movie Database (TMDb)
*/
$response = file_get_contents ('https://api.themoviedb.org/3/movie/popular?api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1');
$popular= json_decode($response,true);
?>