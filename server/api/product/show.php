<?php 

include_once './../../controllers/show-products-controller.php';
include_once './../../utils/utils.php';

$result = getProductList();
echo responseOk("Lista de productos", $result->data);
exit();

?>