<?php


session_start();

#header("Cache-Control: no-cache");

$sid = $_COOKIE['CGISESSIDX'];
#$username = $_POST['username'];
if(is_null($sid)){
    $username = NULL;
}
else{
    
    $username = $_SESSION[$sid];
}
#setcookie("CGISESSID", session_id());


header("Content-Type: text/html");

echo <<<EOL
<html><head><title>PHP Sessions</title></head>
<body><h1 align=center>PHP Sessions</h1>
<hr/>\n
EOL;
echo "PHP Session Page 2<br/>\n";

if(is_null( $username)){
    echo "<p><b>Name:</b> You do not have a name set</p>";
}
else{
    echo "<p><b>Name:</b> $username";
}

echo "<br/><br/>";
echo "<a href=\"/cgi-bin/php-state-demo-1.php\">Session Page 1</a><br/>";
echo "<a href=\"/php-cgiform.html\">PHP CGI Form</a><br />";
echo "<form style=\"margin-top:30px\" action=\"/cgi-bin/php-destroy-session.php\" method=\"get\">";
echo "<button type=\"submit\">Destroy Session</button>";
echo "</form>";


echo "</body></html>";

?>