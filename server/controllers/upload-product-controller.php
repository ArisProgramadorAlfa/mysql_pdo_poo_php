<?php

include_once './../../class/ConnectionsManager.php';

function validateUoloadProductData($data){
    if(!isset($data)){
        return false;
    }
    $vars = ['id_user', 'name', 'description', 'price', 'type', 'picture']; 
    try{
        $reqData = [];
        foreach ($vars as $var) {
            if(!isset($data[$var])){
                return false;
            }
            array_push($reqData, $data[$var]);            
        }
        return $reqData;
    }catch(Exception $e){
        return false;
    }       
}

function insertProduct($args){
    array_push($args, 1);
    $query = "INSERT INTO products(
        id_user,
        name,
        description,
        price,
        type,
        picture,
        available ) VALUES(?, ?, ?, ?, ?, ?, ?);";
    $result = ConnectionManager::getInstance()->executeQuery($query, $args);
    return $result;
}

?>