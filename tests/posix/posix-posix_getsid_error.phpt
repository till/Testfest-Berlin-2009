--TEST--
Test posix_getsid() function : error conditions 
--DESCRIPTION--
cases: no params, wrong param, wrong param range
--SKIPIF--
<?php 
	if(!extension_loaded("posix")) print "SKIP - POSIX extension not loaded"; 
?>
--FILE--
<?php
var_dump( posix_getsid() );
var_dump( posix_getsid(array()) );
var_dump( posix_getsid(-1) );
?>
--EXPECTF--
Warning: posix_getsid() expects exactly 1 parameter, 0 given in %s on line %d
bool(false)

Warning: posix_getsid() expects parameter 1 to be long, array given in %s on line %d
bool(false)
bool(false)
--CREDITS--
Moritz Neuhaeuser, info@xcompile.net
PHP Testfest Berlin 2009-05-10
