--TEST--
Test parameter validation in posix_mkfifo().
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
if (strtolower(substr(PHP_OS, 0, 3)) == 'win')) {
    die('SKIP This test doesn't run on Windows.');
}
--FILE--
<?php
posix_mkfifo(null);
var_dump(posix_mkfifo(null, 0644));
--EXPECTF--
Warning: posix_mkfifo() expects exactly 2 parameters, 1 given in %s on line %d
bool(false)
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009