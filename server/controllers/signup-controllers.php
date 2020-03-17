<?php

include './../../class/ConnectionsManager.php';

function validateSignupData($data){
    if(!isset($data)){
        return false;
    }
    $vars = [ 'names', 'last_name', 'email', 'birthdate', 'phone', 'street', 'external_number', 
            'address_1', 'address_2', 'zip_code', 'state', 'picture', 'password'];
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

function registerNewUser($data){
    $query = "INSERT INTO users(
        names,
        last_name,
        email,
        birthdate,
        phone,
        street,
        external_number,
        address_1,
        address_2,
        zip_code,
        state,
        picture,
        password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $result = ConnectionManager::getInstance()->executeQuery($query, $data);
    return $result;
}


?>