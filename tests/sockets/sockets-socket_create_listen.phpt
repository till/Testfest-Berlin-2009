--TEST--
Test if socket binds on 31337
--FILE--
<?php
$sock = socket_create_listen(31337);
socket_getsockname($sock, $addr, $port); 
var_dump($addr, $port);
--EXPECT--
string(7) "0.0.0.0"
int(31337)