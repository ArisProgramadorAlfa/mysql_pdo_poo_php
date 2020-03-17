<?php

function responseOk($message, $data){
    $res = json_encode(array("ok" => true, "message" => $message, "data" => $data), JSON_UNESCAPED_UNICODE);
    return $res;
}

function responseFail($message, $errors){
    $res = json_encode((object)array("ok" => false, "message" => $message, "errors" => $errors), JSON_UNESCAPED_UNICODE);
    return $res;
}

function responseQuery($ok, $data){
    $res = (object)array("ok" => $ok, "data" => $data);
    return $res;
}

?>