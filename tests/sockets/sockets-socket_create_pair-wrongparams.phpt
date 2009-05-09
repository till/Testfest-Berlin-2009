--TEST--
Test parameter handling in socket_create_pair()
--SKIPIF--
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
--FILE--
<?php
var_dump(socket_create_pair(AF_INET, null, null));

$domain = 'unknown';
var_dump(socket_create_pair($domain, SOCK_STREAM, 0, $sockets));

var_dump(socket_create_pair(AF_INET, null, null, $sockets));

var_dump(socket_create_pair(31337, null, null, $sockets));

var_dump(socket_create_pair(AF_INET, 31337, 0, $sockets));
--CREDITS--
Till Klampaeckel, till@php.net
Berlin TestFest 2009 
--EXPECTF--
Warning: socket_create_pair() expects exactly 4 parameters, 3 given in %s on line %d
NULL

Warning: socket_create_pair() expects parameter 1 to be long, string given in %s on line %d
NULL

Warning: socket_create_pair(): unable to create socket pair [94]: Socket type not supported in %s on line %d
bool(false)

Warning: socket_create_pair(): invalid socket domain [31337] specified for argument 1, assuming AF_INET in %s on line %d

Warning: socket_create_pair(): unable to create socket pair [94]: Socket type not supported in %s on line %d
bool(false)

Warning: socket_create_pair(): invalid socket type [31337] specified for argument 2, assuming SOCK_STREAM in %s on line %d

Warning: socket_create_pair(): unable to create socket pair [95]: Operation not supported in %s on line %d
bool(false)