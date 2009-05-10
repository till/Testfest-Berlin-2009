--TEST--
Tests for idn_to_utf8 results
--SKIPIF--
<?php
if (!extension_loaded( 'intl' )) {
    die('SKIP The intl extenstion does not exist.');
}
?>
--FILE--
<?php
$result = 0;
var_dump(idn_to_utf8('',$result));
var_dump($result);
var_dump(idn_to_utf8("domain".chr(0xC3).chr(0xA4),$result));
var_dump($result);
?>
--CREDITS--
Florian Holzhauer fh-pt@fholzhauer.de
PHP Testfest Berlin 2009-05-10
--EXPECTF--
bool(false)
int(0)
string(8) "domainä"
int(0)
