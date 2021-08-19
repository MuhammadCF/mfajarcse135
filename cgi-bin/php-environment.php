<?php


// $addr = $_SERVER['REMOTE_ADDR'];

// echo "Cache-Control: no-cache\n";
// echo "Content-type: text/html\n\n";
header("Cache-Control: no-cache");
header("Content-Type: text/html");
echo <<<EOL
<html><head><title>Environment Variables</title></head>
<body><h1 align=center>Environment Variables</h1>
<hr/>\n
EOL;
echo "Environment Variables<br/>\n";
foreach ($_SERVER as $var => $val){
    echo "$var = $val <br/>";
}

echo "</body></html>";

?>