<?php


// $addr = $_SERVER['REMOTE_ADDR'];
$prot = $_SERVER['SERVER_PROTOCOL'];
$method = $_SERVER['REQUEST_METHOD'];

// echo "Cache-Control: no-cache\n";
// echo "Content-type: text/html\n\n";
header("Cache-Control: no-cache");
header("Content-Type: text/html");
echo <<<EOL
<html><head><title>General Request Echo</title></head>
<body><h1 align=center>General Request Echo</h1>
<hr/>\n
EOL;
echo "HTTP Protocol: $prot <br/>\n";
echo "HTTP Method: $method <br/>\n";
echo "Query String:<br/>\n";
print_r($_GET);
echo "<br/>";
echo "Message Body:<br/>\n";
print_r($_POST);
echo "<br/>";

echo "</body></html>";

?>