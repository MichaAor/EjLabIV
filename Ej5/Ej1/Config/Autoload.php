<?php

spl_autoload_register(function($className){
    $filename = $className . '.php';
    require_once $filename; 

});


?>