<?php

class DB_Access {

    protected $connection;

    function __construct(){
        require_once 'connection.php';
        $this->host = \Connection\ConnectionData::host;
        $this->database = \Connection\ConnectionData::database;
        $this->user = \Connection\ConnectionData::user;
        $this->password = \Connection\ConnectionData::password;
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->database);
    }

    public function closeConnection(){
        $this->connection->close();
    }

    public static function buildCreateQuery($data, $table){
        $queryString = '';
        
        $columnString = implode(',', array_keys($data));
        $values = array_values($data);
        foreach ($values as &$value){
            $value = "'".$value."'";
        }
        $valuesString = implode(',', $values);
        $queryString = "INSERT INTO $table ($columnString) VALUES ($valuesString);";
        return $queryString;
    }
    // update $table set data(key) = data(value) where $condition
    public static function buildUpdateQuery($table, $data, $condition){
        $queryString = '';

        return $queryString;
    }

    public static function buildDeleteQuery($table, $condition){
        $queryString = '';

        return $queryString;
    }

    public static function buildSelectQuery($table, $selectingData, $condition = null, $limit = null, $order = null, $group = null){
        $queryString = "SELECT ". $selectingData. " FROM ". $table;
        if ($condition !== null){
            $queryString .= " WHERE ".$condition;
        }
        if ($limit !== null){
            $queryString .= " LIMIT ".$limit;
        }
        if ($order !== null){
            $queryString .= " ORDER BY ".$order;
        }
        if ($group !== null){
            $queryString .= " GROUP BY ".$group;
        }
        $queryString .= ";";
        return $queryString;
    }

    public function query($queryString){
        $result = $this->connection->query($queryString);
        return $result;
    }

    public function fetchArray($dbResult){
        $resultArray = [];
        if ($dbResult->num_rows > 0) {
            while($row = $dbResult->fetch_assoc()) {
                $resultArray[] = $row;
            }
        }
        return $resultArray;
    }
}