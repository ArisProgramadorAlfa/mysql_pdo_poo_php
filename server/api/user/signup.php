<?php

include_once './../../utils/utils.php';
include_once './../../controllers/signup-controllers.php';

$req = $_POST;

$dataOk = validateSignupData($req);

if(!$dataOk){ 
    echo responseFail("No se puede validar la información", []); 
    exit();
}
$result = registerNewUser($dataOk);
if(!$result->ok) { 
    echo responseFail("No se ha podido agregar el usuario.", []); 
    exit();
}
echo responseOk("Se ha agregado el usuario correctamente.", []);
exit();

?>