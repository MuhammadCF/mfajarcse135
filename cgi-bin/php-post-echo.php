<?php


// $addr = $_SERVER['REMOTE_ADDR'];

// echo "Cache-Control: no-cache\n";
// echo "Content-type: text/html\n\n";
header("Cache-Control: no-cache");
header("Content-Type: text/html");
echo <<<EOL
<html><head><title>POST Request Echo</title></head>
<body><h1 align=center>POST Request Echo</h1>
<hr/>\n
EOL;
echo "POST Request message body<br/>\n";
foreach ($_POST as $var => $val){
    echo "$var = $val <br/>";
}

echo "</body></html>";

?>