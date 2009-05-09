--TEST--
Test socket_set_block return values
--SKIP--
<?php
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
?>
--FILE--
<?php

$socket = socket_create_listen(31337);
var_dump(socket_set_block($socket));

$socket2 = socket_create_listen(31338);
socket_close($socket2);
var_dump(@socket_set_block($socket2));

?>
--EXPECT--
bool(true)
bool(false)
--CREDITS--
Robin Mehner, robin@coding-robin.de
PHP Testfest Berlin 2009-05-09
