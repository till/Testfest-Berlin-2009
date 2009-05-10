--TEST--
Test if socket_set_option() returns 'unable to set socket option' failure for invalid options
--SKIPIF--
<?php
if (!extension_loaded('sockets')) {
        die('skip sockets extension not available.');
}
?>
--FILE--
<?php
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if (!$socket) {
        die('skip Unable to create AF_INET socket [socket]');
}

socket_set_option( $socket, SOL_SOCKET, 1, 1);
socket_close($socket);
?>
--EXPECTF--
Warning: socket_set_option(): unable to set socket option %s on line %d
--CREDITS--
Moritz Neuhaeuser, info@xcompile.net
PHP Testfest Berlin 2009-05-10
