<?php

include_once './../../controllers/upload-product-controller.php';
include_once './../../utils/utils.php';

$data = validateUoloadProductData($_POST);
if(!$data){
    echo responseFail("No se pueden validar los datos", (object)[]);
    exit();
}
$result = insertProduct($data);
echo responseOk("Se ha registrado el producto correctamente.", $result->data);

exit();

?>