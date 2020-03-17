<?php 

include_once './../../class/ConnectionsManager.php';

function getProductList(){
    $query = "SELECT * FROM products;";
    $result = ConnectionManager::getInstance()->executeQuery($query, []);
    return $result;    
}

?>