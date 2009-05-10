--TEST--
Test for Bug 48220 - wrong $errorcode
--SKIPIF--
<?php
if (!function_exists('idn_to_ascii')) {
    die('SKIP The function idn_to_ascii does not exist.');
}
?>
--FILE--
<?php
idn_to_ascii("xn--".chr(0xC3).chr(0xA4),$result);
var_dump($result);
idn_to_utf8("xn--".chr(0xC3).chr(0xA4),$result);
var_dump($result);
?>
--CREDITS--
Florian Holzhauer fh-pt@fholzhauer.de
PHP Testfest Berlin 2009-05-10
--EXPECTF--
int(8)
int(8)
