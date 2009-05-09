--TEST--
Test if bindtextdomain() returns false if path does not exist.
--SKIPIF--
<?php
if (!extension_loaded("gettext")) {
    die("skip gettext extension is not loaded.\n");
}
if (!setlocale(LC_ALL, 'en_US.UTF-8')) {
    die("skip en_US.UTF-8 locale not supported.");
}
--FILE--
<?php
chdir(dirname(__FILE__));
setlocale(LC_ALL, 'en_US.UTF-8');
var_dump(bindtextdomain('example.org', 'foobar'));
--EXPECTF--
bool(false)
--CREDITS--
Till Klampaeckel, till@php.net
PHP Testfest Berlin 2009-05-09