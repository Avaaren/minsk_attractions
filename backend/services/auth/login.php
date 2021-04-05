<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);

require_once 'AuthClass.php';

class Login extends AuthClass{

    public static function loginRequestHandler(){

        $cleanedData = parent::clearRequest($_POST);

        $isUserIsset = parent::checkUserIsset($cleanedData['login']);

        if ($isUserIsset !== null){
            echo "hello";
        }
        else{
            echo "no";
        }
    }

    public static function loginUser($userId, $login){

    }
}