<?php


// $addr = $_SERVER['REMOTE_ADDR'];

// echo "Cache-Control: no-cache\n";
// echo "Content-type: text/html\n\n";
header("Cache-Control: no-cache");
header("Content-Type: text/html");
echo <<<EOL
<html><head><title>GET Request Echo</title></head>
<body><h1 align=center>GET Request Echo</h1>
<hr/>\n
EOL;
echo "GET Request query string<br/>\n";
foreach ($_GET as $var => $val){
    echo "$var = $val <br/>";
}

echo "</body></html>";

?>