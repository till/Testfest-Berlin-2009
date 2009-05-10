--TEST--
Test posix_getsid() function : error conditions 
--DESCRIPTION--
Get the current session id of a process pid (POSIX.1, 4.2.1) 
Source code: ext/posix/posix.c
--SKIPIF--
<?php 
	if(!extension_loaded("posix")) print "SKIP - POSIX extension not loaded"; 
?>
--FILE--
<?php
echo "*** Testing posix_getsid() : error conditions ***\n";

echo "\n-- Testing posix_getsid() function with no argument --\n";
var_dump( posix_getsid() );
echo "\n-- Testing posix_getsid() function with invalid type of argument --\n";
var_dump( posix_getsid(array()) );
echo "\n-- Testing posix_getsid() function with invalid range of argument --\n";
var_dump( posix_getsid(-1) );

echo "Done";
?>
--EXPECTF--
*** Testing posix_getsid() : error conditions ***

-- Testing posix_getsid() function with no argument --

Warning: posix_getsid() expects exactly 1 parameter, 0 given in %s on line %d
bool(false)

-- Testing posix_getsid() function with invalid type of argument --

Warning: posix_getsid() expects parameter 1 to be long, array given in %s on line %d
bool(false)

-- Testing posix_getsid() function with invalid range of argument --
bool(false)
Done
--CREDITS--
Moritz Neuhaeuser, info@xcompile.net
PHP Testfest Berlin 2009-05-10
