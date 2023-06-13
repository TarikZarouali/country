<?php

function load_class($classname)
{
    $pathToFile = '../classes/' . $classname . '.php';

    if (file_exists($pathToFile)){
        require($pathToFile);
    }
    else{
        echo 'je bent niet goed bezig';
    }
}

spl_autoload_register('load_class');