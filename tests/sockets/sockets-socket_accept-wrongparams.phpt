--TEST--
Test parameter handling in socket_accept()
--SKIP--
if (strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    die('SKIP Test cannot run on Windows.');
}
--FILE--
<?php
var_dump(socket_accept(null));
--CREDITS--
Till Klampaeckel, till@php.net
Berlin TestFest 2009 
--EXPECTF--
Warning: socket_accept() expects parameter 1 to be resource, null given in %s on line %d
NULL
