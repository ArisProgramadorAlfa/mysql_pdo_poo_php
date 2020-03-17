<?php

include_once './../../controllers/remove-product.php';
include_once './../../utils/utils.php';

if(!isset($_POST['id'])){
    echo responseFail("No se puede validar el id del producto.", (object)[]);
    exit();
}
$result = removeProduct($_POST['id']);
echo json_encode($result);
exit();
if(!$result->ok){
    echo responseFail("No se puede eliminar el producto.", (object)[]);
    exit();
}
echo responseOk("Se ha eliminado el producto correctamente.", (object)[]);
exit();


?>