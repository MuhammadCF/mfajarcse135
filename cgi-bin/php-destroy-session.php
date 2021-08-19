<?php


session_start();

#header("Cache-Control: no-cache");
#header("Content-Type: text/html");

$sid = $_COOKIE['CGISESSIDX'];
#$username = $_POST['username'];
#$username = $_SESSION[$sid];
setcookie("CGISESSIDX", "", time() - 3600);
unset($_SESSION[$sid]);




echo <<<EOL
<html><head><title>PHP Session Destroyed</title></head>
<body><h1 align=center>PHP Session Destroyed</h1>
<hr/>\n
EOL;
echo "PHP Session Destroyed<br/>\n";
echo "<br/><br/>";
echo "<a href=\"/php-cgiform.html\">PHP CGI Form</a><br />";
echo "<a href=\"/cgi-bin/php-state-demo-1.php\">Session Page 1</a><br/>";
echo "<a href=\"/cgi-bin/php-state-demo-2.php\">Session Page 2</a><br/>";
echo "</form>";


echo "</body></html>";

?>