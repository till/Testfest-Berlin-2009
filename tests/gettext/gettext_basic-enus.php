<?php // $Id: gettext_basic.phpt,v 1.2 2004/05/26 18:18:14 iliaa Exp $

chdir(dirname(__FILE__));
setlocale(LC_ALL, 'en_US.UTF-8');
bindtextdomain ("messages", "./locale");
textdomain ("messages");
echo gettext("Basic test"), "\n";
echo _("Basic test"), "\n";

?>
