<?php

class DB_Access {
    public static function buildCreateQuery($data, $table, $insertingColumns = null){
        $queryString = '';

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
        $queryString = '';

        return $queryString;
    }

    public static function query($queryString){

    }
}