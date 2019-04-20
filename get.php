<?php
//header('Access-Control-Allow-Origin: *');
header('content-type: text/javascript');
//header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
echo $_GET['jsoncallback'].'('. json_encode(array('ok' => 10001)).');';

?>
