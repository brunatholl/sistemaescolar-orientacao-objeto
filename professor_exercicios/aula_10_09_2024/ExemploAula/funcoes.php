<?php 

function my_autoload($class){
    require_once($class . ".php");
}

spl_autoload_register('my_autoload');

