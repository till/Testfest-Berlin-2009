--TEST--
Test posix_getgrgid().
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
$grp = posix_getgrgid(0);
if (!isset($grp['name'])) {
    die('Array index "name" does not exist.');
}
if (!isset($grp['passwd'])) {
    die('Array index "passwd" does not exist.');
}
if (!isset($grp['members'])) {
    die('Array index "members" does not exist.');
} elseif (!is_array($grp['members'])) {
    die('Array index "members" must be an array.');
}
if (!isset($grp['gid'])) {
    die('Array index "gid" does not exist.');
}
var_dump($grp['gid']);
--EXPECT--
int(0)
--CREDITS--
Till Klampaeckel, till@php.net
TestFest Berlin 2009