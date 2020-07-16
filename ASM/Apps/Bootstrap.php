<?php
spl_autoload_register(function ($className){
    $exp = str_repeat('_','/', $className);
    $path = str_repeat("Apps","", dirname(__FILE__));
    include_once $path.'/'.$exp.'.php';
})

?>