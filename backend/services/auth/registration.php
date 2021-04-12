<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');
require_once 'AuthClass.php';

class Registration extends Auth\AuthClass{
    const DEFAULT_PERMOSSION = 2;
    const DEFAULT_RATING = 0;

    function encryptPassword($password){
        $password = password_hash($password, PASSWORD_BCRYPT);
        return $password;
    }

    function registerUser($userData){
        $connection = new \DB_Access();

        $dbArray = [
            'Login' => $userData["login"],
            'Email' => $userData["email"],
            'Password' => $userData["password"],
            'Rating' => self::DEFAULT_RATING,
            'Previlegies' => self::DEFAULT_PERMOSSION
        ];

        $queryString = $connection->buildCreateQuery($dbArray, 'user');
        $dbResult = $connection->query($queryString);

        $connection->closeConnection();
    }

    function handleReistration(){
        $cleanedData = parent::clearRequest();
        if (parent::checkUserIsset($cleanedData['login'])){
            $this->errors[] = "Такой пользователь уже существует";
        }
        if ($cleanedData["password"] === $cleanedData["repeatPassword"]){
            $cleanedData["password"] = $this->encryptPassword($cleanedData["password"]);
            unset($cleanedData["repeatPassword"]);
            $this->registerUser($cleanedData);
        }
        else{
            $this->errors[] = "Пароли не совпадают";
        }
        if (!empty($this->errors)){
            return false;
        }
        return true;
    }
}