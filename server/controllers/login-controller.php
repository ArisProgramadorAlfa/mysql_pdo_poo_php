<?php

function validateLoginData($data){      
    if(!isset($data)){   
        return false;
    }
    $vars = [ 'email', 'password'];
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

function login($args){
    $password = $args[1];
    $query = "SELECT * FROM users WHERE email=?";
    $result = ConnectionManager::getInstance()->executeQuery($query, [$args[0]]);        
    if($password === $result->data[0]['password']){
        return true;
    } 
    return false;
}

?>