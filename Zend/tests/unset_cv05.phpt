--TEST--
unset() CV 5 (indirect unset() of global variable in session_start())
--SKIPIF--
<?php include('../../ext/session/tests/skipif.inc'); ?>
--FILE--
<?php
$HTTP_SESSION_VARS = "ok\n";
echo $HTTP_SESSION_VARS;
session_start();
echo $HTTP_SESSION_VARS;
echo "\nok\n";
?>
--EXPECTF--
ok

Warning: session_start(): Cannot send session cookie - headers already sent by (output started at %sunset_cv05.php on line %d

Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at %sunset_cv05.php:%d) in %sunset_cv05.php on line %d
Array
ok
