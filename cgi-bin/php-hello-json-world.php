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

echo json_decode($body);
?>