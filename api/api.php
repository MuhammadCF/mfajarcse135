<!-- <?php
// Include router class
include('./Route.php');

// // Add base route (startpage)
// Route::add('/',function(){
//     echo 'Welcome :-)';
// });

// // Simple test route that simulates static html file
// Route::add('/test.html',function(){
//     echo 'Hello from test.html';
// });

// // Post route example
// Route::add('/contact-form',function(){
//     echo '<form method="post"><input type="text" name="test" /><input type="submit" value="send" /></form>';
// },'get');

// // Post route example
// Route::add('/contact-form',function(){
//     echo 'Hey! The form has been sent:<br/>';
//     print_r($_POST);
// },'post');

// // Accept only numbers as parameter. Other characters will result in a 404 error
// Route::add('/foo/([0-9]*)/bar',function($var1){
//     echo $var1.' is a great number!';
// });


// Post route example
Route::add('/static/',function(){

    header("Cache-Control: no-cache");
    header("Content-Type: application/json");

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

?> -->


<?php

$myRoot = $_SERVER['DOCUMENT_ROOT'];
echo "$myRoot";
?>

