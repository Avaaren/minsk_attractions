<?php
namespace Auth;

class BaseAuthClass{
    
    public $errors = [];

    public static $dataArray = [
        0 => [
            'login' => 'admin',
            'password' => '123',
            'email' => 'admin@mail.ru'
        ], 
        1 => [
            'login' => 'not-admin',
            'password' => '123',
            'email' => 'not-admin@mail.ru'
        ], 
    ];

    public static function clearRequest(){
        $cleanedData = [];
        foreach ($_POST as $name => $field){
           $cleanedData[$name] = trim(htmlentities($field));
        }

        if (sizeof($cleanedData) > 0){
            return $cleanedData;
        }
        $this->errors[] = "Empty request";
    }

    public static function checkUserIsset($login){
        
        foreach(self::$dataArray as $key => $item){
            if ($item['login'] === $login){
                return $key;
            }
        }

        return null;
        // Когда подключу бд на серв, сделать обратно id/false. Щас проблема, если $key = 0
    }

    public static function displayErrors($errors){
        return;
    }
}

class Login extends BaseAuthClass{

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