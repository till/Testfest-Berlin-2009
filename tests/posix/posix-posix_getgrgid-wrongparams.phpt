--TEST--
Test parameters on posix_getgrgid().
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
$gid = 181818188181818181818188181; // obscene high gid
var_dump(posix_getgrgid($gid));
var_dump(posix_getgrgid(-1));
var_dump(posix_getgrgid());
--EXPECTF--
bool(false)
bool(false)

Warning: posix_getgrgid() expects exactly 1 parameter, 0 given in %s on line %d
bool(false)
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009