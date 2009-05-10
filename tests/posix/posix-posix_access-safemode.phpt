--TEST--
Test posix_access() with safe_mode enabled.
--SKIPIF--
<?php
if (!extension_loaded('posix')) {
    die('SKIP The posix extension is not loaded.');
}
if (strtolower(substr(PHP_OS, 0, 3)) == 'win')) {
    die('SKIP This test doesn't run on Windows.');
}
if (version_compare(PHP_VERSION, '6.0.0') === 1) {
    die('SKIP safe_mode is deprecated in 6.0.0.');
}
if (posix_geteuid() == 0) {
    die('SKIP Cannot run test as root.');
}
--INI--
safe_mode = 1
--FILE--
<?php
var_dump(posix_access('/tmp', POSIX_W_OK));
--EXPECTF--
PHP Warning:  Directive 'safe_mode' is deprecated in PHP 5.3 and greater in Unknown on line 0
bool(false)
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009