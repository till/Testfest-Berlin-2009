--TEST--
Test return values of posix_getgrgid() on MacOSX.
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
if (strtolower(substr(PHP_OS, 0, 6)) != 'darwin') {
    die('SKIP This test only runs on MacOSX/Darwin.');
}
--FILE--
<?php
$grp = posix_getgrgid(-1);
var_dump($grp['name']);
--EXPECT--
string(7) "nogroup"
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009