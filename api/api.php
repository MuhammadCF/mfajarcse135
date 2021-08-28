<?php

$host = 'localhost';
$db = 'bookdb';
$user = 'root';
$password = 'S@cr@t1!';

// Include router class
$myRoot = $_SERVER['DOCUMENT_ROOT'];
include("$myRoot" . "/api/Route.php");

// // Accept only numbers as parameter. Other characters will result in a 404 error
// Route::add('/foo/([0-9]*)/bar',function($var1){
//     echo $var1.' is a great number!';
// });


// Post route example
Route::add('/api/static',function(){

    //header("Cache-Control: no-cache");
    //header("Content-Type: application/json");

    echo <<<EOL

    static: {
        userAgent: null,
        language: null,
        acceptsCookies: null,
        screenDimensions: {
          inner: {
            innerWidth: null,
            innerHeight: null
          },
          outer: {
            outerWidth: null,
            outerHeight: null
          }
        }
    EOL;
},'get');

Route::run('/');

?>