--TEST--
Test ngettext() functionality
--SKIPIF--
<?php 
	if (!extension_loaded("gettext")) {
		die("SKIP extension gettext not loaded\n");
	}
	if (!setlocale(LC_ALL, 'en_US.UTF-8')) {
		die("SKIP en_US.UTF-8 locale not supported.");
	}
?>
--FILE--
<?php // $Id: gettext_basic.phpt,v 1.2 2004/05/26 18:18:14 iliaa Exp $
chdir(dirname(__FILE__));
setlocale(LC_ALL, 'en_US.UTF-8');
bindtextdomain('dngettextTest', './locale');
textdomain('dngettextTest');
var_dump(ngettext('item', 'items', 1));
var_dump(ngettext('item', 'items', 2));
?>
--EXPECT--
string(7) "Produkt"
string(8) "Produkte"
--CREDITS--
Christian Weiske, cweiske@php.net
PHP Testfest Berlin 2009-05-09
