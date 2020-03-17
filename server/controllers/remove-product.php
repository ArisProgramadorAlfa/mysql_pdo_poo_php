<?php

include_once './../../class/ConnectionsManager.php';

function removeProduct($id){
    $query = "DELETE FROM products WHERE id_product=?;";
    $result = ConnectionManager::getInstance()->executeQuery($query, [$id]);
    return $result;
}

?>