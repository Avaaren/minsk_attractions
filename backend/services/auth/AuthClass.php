<?php
namespace Auth;
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');

class AuthClass{
    
    public $errors = [];
    public $dbCnnection;

    function __construct(){
        $this->dbConnection = new \DB_Access();
    }

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

    public static function displayErrors($errors){
        return;
    }
}