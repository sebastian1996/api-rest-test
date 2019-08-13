<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type');
header('content-type: text/javascript');
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");

echo  json_encode(array('ok' => 10001));
