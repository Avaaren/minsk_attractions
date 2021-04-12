<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');
require_once 'registration.php';

$reg = new Registration();
$isSuccess = $reg->handleReistration();

echo json_encode(['errors' => $reg->errors, 'success' => $isSuccess]);