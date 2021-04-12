<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
require_once 'AuthClass.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');

class Logout extends Auth\AuthClass {

    public static function logoutUser($login){
        unset($_SESSION['is_auth']);
        unset($_SESSION['username']);

        header('Location: /');
    }
}