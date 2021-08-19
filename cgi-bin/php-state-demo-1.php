<?php


session_start();

#header("Cache-Control: no-cache");
header("Content-Type: text/html");

setcookie("CGISESSIDX", session_id());
#$sid = $_COOKIE['CGISESSID'];
if(is_null($_SESSION[session_id()])){

    $username = $_POST['username'];
}
else{
    $username = $_SESSION[session_id()];

}
$_SESSION[session_id()] = $username;




echo <<<EOL
<html><head><title>PHP Sessions</title></head>
<body><h1 align=center>PHP Sessions</h1>
<hr/>\n
EOL;
echo "PHP Session Page 1<br/>\n";

if(is_null( $username)){
    echo "<p><b>Name:</b> You do not have a name set</p>";
}
else{
    echo "<p><b>Name:</b> $username";
}

echo "<br/><br/>";
echo "<a href=\"/cgi-bin/php-state-demo-2.php\">Session Page 2</a><br/>";
echo "<a href=\"/php-cgiform.html\">PHP CGI Form</a><br />";
echo "<form style=\"margin-top:30px\" action=\"/cgi-bin/php-destroy-session.php\" method=\"get\">";
echo "<button type=\"submit\">Destroy Session</button>";
echo "</form>";


echo "</body></html>";

?>