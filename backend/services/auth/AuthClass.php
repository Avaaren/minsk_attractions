<?php
namespace Auth;
require_once($_SERVER['DOCUMENT_ROOT'].'/services/db_layer/db_query_builder.php');

class AuthClass{
    
    public $errors = [];
    public $dbConnection;

    function __construct(){
        $this->dbConnection = new \DB_Access();
    }

    public function clearRequest(){
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
        $connection = new \DB_Access();
        $queryString = $connection->buildSelectQuery('user', 'Id', "Login = '$login'");
        $dbResult = $connection->query($queryString);    
        if ($dbResult->num_rows > 0){
            return true;
        }
        return false;
    }

    public static function isAuthorized(){
        if ($_SESSION["is_auth"] == true){
            return true;
        }
        return false;
    }

    public static function getErrors(){
        return $this->errors;
    }
}