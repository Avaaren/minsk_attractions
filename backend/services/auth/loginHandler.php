<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/services/db_layer/db_query_builder.php');
require_once 'login.php';

$log = new Login();
$isSuccess = $log->loginRequestHandler();

echo json_encode(['errors' => $log->errors, 'success' => $isSuccess]);