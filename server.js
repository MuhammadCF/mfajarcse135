//var express = require('express');
var jsonServer = require('json-server');
//var express = require('express');

var server = jsonServer.create();
// ...

server.use(jsonServer.defaults());

var router = jsonServer.router('db.json');

server.use(router);

server.listen(3000);
