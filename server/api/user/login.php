<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once './../../class/ConnectionsManager.php';
include_once './../../controllers/login-controller.php';

$data = validateLoginData($_POST);

if(!$data){
    echo responseFail("No se pueden validar los datos.", []);
    exit();
}
$result = login($data);
if(!$result){
    echo responseFail("No se ha podido iniciar sesión, revisa que tus datos esten correctos", []);
    exit();
}
echo responseOk("Welcome to Marketplace", []);

exit();

?>