--TEST--
Test if socket_create_listen throws E_WARNING with wrong parameters.
--SKIP--
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
--FILE--
<?php
$sock1 = socket_create_listen(array());
$sock2 = socket_create_listen(31337, array());
--EXPECTF--
Warning: socket_create_listen() expects parameter 1 to be long, array given in %s on line %d

Warning: socket_create_listen() expects parameter 2 to be long, array given in %s on line %d