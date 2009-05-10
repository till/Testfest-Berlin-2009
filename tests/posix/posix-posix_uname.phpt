--TEST--
Test posix_uname()
--DESCRIPTION--
Gets information about the system.
Source code: ext/posix/posix.c
--SKIPIF--
<?php 
	if(!extension_loaded("posix")) print "SKIP - POSIX extension not loaded"; 
?>
--FILE--
<?php
var_dump(posix_uname());
?>
--EXPECTF--
array(5) {
  ["sysname"]=>
  string(%d) "%s"
  ["nodename"]=>
  string(%d) "%s"
  ["release"]=>
  string(%d) "%s"
  ["version"]=>
  string(%d) "%s"
  ["machine"]=>
  string(%d) "%s"
}
--CREDITS--
Falko Menge, mail at falko-menge dot de
PHP Testfest Berlin 2009-05-10
