--TEST--
Test if socket_create_listen() returns false, when it cannot bind to the port.
--SKIP--
<?php
if (!extension_loaded('sockets')) {
    die('SKIP The sockets extension is not loaded.');
}
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded (cannot determine if test is run as root user).');
}
if (posix_geteuid() == 0) {
    die('SKIP This test cannot be run as root.');
}
--FILE--
<?php
$sock = socket_create_listen(80);
--EXPECTF--
Warning: socket_create_listen(): unable to bind to given address [13]: Permission denied in %s on line %d
--CREDITS--
Till Klampaeckel, till@php.net
PHP Testfest Berlin 2009-05-09