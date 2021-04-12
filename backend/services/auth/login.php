<?php
session_start();
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
require_once 'AuthClass.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');

class Login extends Auth\AuthClass {

    function loginRequestHandler(){
        $cleanedData = parent::clearRequest($_POST);
        $isUserIsset = parent::checkUserIsset($cleanedData['login']);

        if ( !$isUserIsset ){
            $this->errors[] = 'Такого пользователя не существует';
            return false;
        }

        if ( $this->checkUserCredentials($cleanedData['login'], $cleanedData['password']) ){
            $this->loginUser($cleanedData['login']);

            if ($_SESSION['is_auth']){
                return true;
            }
        }
        return false;
    }

    function loginUser($login){
        $_SESSION['is_auth'] = true;
        $_SESSION['username'] = $login;
    }
    
    function checkUserCredentials($login, $password){
        $connection = new \DB_Access();

        $queryString = $connection->buildSelectQuery("user", "Id, Login, Password", "Login = '$login'");
        $dbResult = $connection->query($queryString);
        $dbArray = $connection->fetchArray($dbResult);
        $isAccessAccepted = password_verify($password, $dbArray[0]['Password']);
        if ( $isAccessAccepted ) {
            return true;
        }
        else {
            $this->errors[] = 'Пароли не совпадают';
            return false;
        }
        $connection->closeConnection();
    }
}