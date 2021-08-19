<?php

$currtime = date('l jS \of F Y h:i:s A');
$addr = $_SERVER['REMOTE_ADDR'];

// echo "Cache-Control: no-cache\n";
// echo "Content-type: text/html\n\n";
header("Cache-Control: no-cache");
header("Content-Type: text/html");

$body = ['title' => 'Hello, PHP!',
    'heading' => 'Hello, PHP!',
    'message' => 'This page was generated with the PHP programming language',
    'time' => $currtime, 'IP' => $addr];

$body_json = json_decode($body);

echo <<<EOL
<html><head><title>Hello CGI World</title></head>
<body><h1 align=center>Hello JSON World</h1>
<hr/>\n
EOL;
echo "Hello World<br/>\n";
echo $body_json;

echo "</body></html>";
?>