--TEST--
Test posix_ctermid()
--DESCRIPTION--
Gets path name of controlling terminal.
Source code: ext/posix/posix.c
--SKIPIF--
<?php 
	if (!extension_loaded('posix')) { 
        die('SKIP - POSIX extension not available';
    }
    // needed because of #ifdef HAVE_CTERMID in posix.c
    if (!function_exists('posix_ctermid')) { 
        die('SKIP - fuction posix_ctermid() not available');
    }
?>
--FILE--
<?php
var_dump(posix_ctermid());
?>
--EXPECTF--
string(%d) "%s"
--CREDITS--
Falko Menge, mail at falko-menge dot de
PHP Testfest Berlin 2009-05-10
