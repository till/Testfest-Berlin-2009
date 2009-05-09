--TEST--
Test if bindtextdomain() errors if the domain is empty.
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
bindtextdomain('', 'foobar');
--EXPECTF--
Warning: The first parameter of bindtextdomain must not be empty in %s on line %d
--CREDIT--
Till Klampaeckel, till@php.net
PHP Testfest Berlin 2009-05-09