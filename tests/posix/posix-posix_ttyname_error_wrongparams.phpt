--TEST--
Test posix_ttyname() with wrong parameters
--DESCRIPTION--
Gets the absolute path to the current terminal device that is open on a given file descriptor.
Source code: ext/posix/posix.c
--SKIPIF--
<?php 
	if (!extension_loaded('posix')) { 
        die('SKIP - POSIX extension not available');
    }
	if (!extension_loaded('gd')) { 
        die('SKIP - GD extension not available');
    }
    if (!function_exists('imagecreate')) {
        die('SKIP - Function imagecreate() not available');
    }
?>
--FILE--
<?php
    var_dump(posix_ttyname()); // param missing
    var_dump(posix_ttyname(0)); // param not a ressource
    var_dump(posix_ttyname(imagecreate(1, 1))); // wrong resource type
?>
--EXPECTF--
Warning: posix_ttyname() expects exactly 1 parameter, 0 given in /home/falko/projects/php-testfest-2009/Testfest-Berlin-2009/tests/posix/posix-posix_ttyname_error_wrongparams.php on line 2
bool(false)
bool(false)

Warning: posix_ttyname(): supplied resource is not a valid stream resource in /home/falko/projects/php-testfest-2009/Testfest-Berlin-2009/tests/posix/posix-posix_ttyname_error_wrongparams.php on line 4

Warning: posix_ttyname(): expects argument 1 to be a valid stream resource in /home/falko/projects/php-testfest-2009/Testfest-Berlin-2009/tests/posix/posix-posix_ttyname_error_wrongparams.php on line 4
bool(false)
--CREDITS--
Falko Menge, mail at falko-menge dot de
PHP Testfest Berlin 2009-05-10
