--TEST--
Test posix_mkfifo() with safe_mode.
--DESCRIPTION--
The test attempts to enable safe_mode, catches all the relevant E_WARNING's and tries to create a fifo in /tmp.

The first attempt (writing to /tmp) should effectively fail because /tmp is owned by root.

The second attempt (writing to a local created file) works.
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
var_dump(posix_mkfifo('/tmp/foobar', 0644));

$dir = dirname(__FILE__) . '/foo';
mkdir ($dir);
var_dump(posix_mkfifo($dir . '/bar', 0644));
--EXPECTF--
PHP Warning:  Directive 'safe_mode' is deprecated in PHP 5.3 and greater in Unknown on line 0

Warning: posix_mkfifo(): SAFE MODE Restriction in effect.  The script whose uid is %d is not allowed to access /tmp owned by uid %d in %s on line %d
bool(false)
bool(true)
--CLEAN--
<?php
$dir = dirname(__FILE__) . '/foo';
unlink($dir . '/bar');
rmdir($dir);
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009