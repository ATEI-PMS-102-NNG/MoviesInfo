<?php
/**
// link_correction: Call to server for position correction station
 Εντοπισμός των δημοφιλέστερων ταινοών απο το API της The Movie Database (TMDb)
 */
$responce = file_get_contents ('https://api.themoviedb.org/3/movie/popular?api_key=b5456db86ace1556b60313e04972fc9f&language=en-US&page=1');
