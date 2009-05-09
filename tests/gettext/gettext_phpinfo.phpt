--TEST--
Test phpinfo() displays gettext support 
--SKIPIF--
<?php 
	if (!extension_loaded("gettext")) {
		die("extension gettext not loaded\n");
	}
	if (!setlocale(LC_ALL, 'en_US.UTF-8')) {
		die("skip en_US.UTF-8 locale not supported.");
	}
?>
--FILE--
<?php // $Id: gettext_basic.phpt,v 1.2 2004/05/26 18:18:14 iliaa Exp $
phpinfo();
?>
--EXPECTF--
%a
%rGetText Support.*enabled%r
%a
--CREDITS--
Tim Eggert, tim@elbart.com
PHP Testfest Berlin 2009-05-09
