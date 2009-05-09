--TEST--
Check how ngettext() with wrong parameters behaves.
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
ngettext(array(), "", 1);
ngettext("", array(), 1);
ngettext("", "", array());
ngettext();
ngettext("");
ngettext("", "");
?>
--EXPECTF--
Warning: ngettext() expects parameter 1 to be string, array given in %s on line 2

Warning: ngettext() expects parameter 2 to be string, array given in %s on line 3

Warning: ngettext() expects parameter 3 to be long, array given in %s on line 4

Warning: ngettext() expects exactly 3 parameters, 0 given in %s on line 5

Warning: ngettext() expects exactly 3 parameters, 1 given in %s on line 6

Warning: ngettext() expects exactly 3 parameters, 2 given in %s on line 7
--CREDITS--
Tim Eggert, tim@elbart.com
PHP Testfest Berlin 2009-05-09
