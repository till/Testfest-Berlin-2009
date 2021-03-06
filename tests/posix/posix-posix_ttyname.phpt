--TEST--
Test posix_ttyname()
--DESCRIPTION--
Gets the absolute path to the current terminal device that is open on a given file descriptor.
Source code: ext/posix/posix.c
--SKIPIF--
<?php 
	if (!extension_loaded('posix')) { 
        die('SKIP - POSIX extension not available');
    }
?>
--FILE--
<?php
    var_dump(posix_ttyname(STDIN));
    var_dump(posix_ttyname(STDERR));
    var_dump(posix_ttyname(STDOUT));
?>
--EXPECTF--
bool(false)
bool(false)
bool(false)
--CREDITS--
Falko Menge, mail at falko-menge dot de
PHP Testfest Berlin 2009-05-10
