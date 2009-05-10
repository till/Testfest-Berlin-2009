--TEST--
Tests for idn_to_ascii results
--SKIPIF--
<?php
if (!function_exists('idn_to_ascii')) {
    die('SKIP The function idn_to_ascii does not exist.');
}
?>
--FILE--
<?php
$result = 0;
var_dump(idn_to_ascii('',$result));
var_dump($result);
var_dump(idn_to_ascii("domain".chr(0xC3).chr(0xA4),$result));
var_dump($result);
var_dump(idn_to_ascii("xn--".chr(0xC3).chr(0xA4),$result));
var_dump($result);
?>
--CREDITS--
Florian Holzhauer fh-pt@fholzhauer.de
PHP Testfest Berlin 2009-05-10
--EXPECTF--
bool(false)
int(0)
string(14) "xn--domain-gua"
int(0)
bool(false)
int(8)
