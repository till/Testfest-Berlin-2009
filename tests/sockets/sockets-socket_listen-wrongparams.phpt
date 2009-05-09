--TEST--
Test parameter handling in socket_listen().
--SKIP--
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
--FILE--
<?php
var_dump(socket_listen(null));
$socket = socket_create(AF_UNIX, SOCK_STREAM, 0); 
var_dump(socket_listen($socket));
--CREDITS--
Till Klampaeckel, till@php.net
Berlin TestFest 2009 
--EXPECTF--
Warning: socket_listen() expects parameter 1 to be resource, null given in %s on line %d
NULL

Warning: socket_listen(): unable to listen on socket [22]: Invalid argument in %s on line %d
bool(false)