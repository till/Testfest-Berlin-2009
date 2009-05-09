--TEST--
Test if socket_set_nonblock throws E_WARNING with wrong parameters.
--FILE--
<?php
$socket = socket_set_nonblock(array());
?>
--EXPECTF--
Warning: socket_set_nonblock() expects parameter 1 to be resource, array given in %s on line %d
