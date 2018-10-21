<?php

include "conf.php";

$request = $_SERVER['REDIRECT_URL'];

$request = str_replace($baseUrl.'/', '', $request);
$request = str_replace('/', '', $request);


if($request == ''){
    require 'homepage.php';
}elseif(in_array($request, $pages)){
    require $request.'.php';
}else{
    require '404.php';
}

?>