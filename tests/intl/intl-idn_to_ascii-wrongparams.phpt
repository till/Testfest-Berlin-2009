--TEST--
Test if idn_to_ascii throws E_WARNING if wrong params are supplied.
--SKIPIF--
<?php
if (!function_exists('idn_to_ascii')) {
    die('SKIP The function idn_to_ascii does not exist.');
}
?>
--FILE--
<?php
idn_to_ascii(array());
idn_to_ascii('foobar','foobar');
var_dump(idn_to_ascii('foobar'));
$x = 0;
var_dump(idn_to_ascii('foobar',$x));
?>
--CREDITS--
Florian Holzhauer fh-pt@fholzhauer.de
PHP Testfest Berlin 2009-05-10
--EXPECTF--
Warning: idn_to_ascii() expects parameter 1 to be string, array given in %s on line %d

Warning: idn_to_ascii() expects parameter 2 to be long, string given in %s on line %d
string(6) "foobar"
string(6) "foobar"
