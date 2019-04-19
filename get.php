<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("content-type: application/json");
echo json_encode(array('ok' => 10001));
