<?php

$currtime = date('l jS \of F Y h:i:s A');
$addr = $_SERVER['REMOTE_ADDR'];

echo "Cache-Control: no-cache\n";
echo "Content-type: text/html\n\n";
echo <<<EOL
<html><head><title>Hello CGI World</title></head>\
<body><h1 align=center>Hello HTML World</h1>\
<hr/>\n
EOL;
echo "Hello World<br/>\n";
echo "This program was generated at: $currtime\n<br/>";
echo "Your current IP address is: $addr<br/>";

echo "</body></html>";

?>