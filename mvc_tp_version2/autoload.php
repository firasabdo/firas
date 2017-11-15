<?php

/**
 * chargement automatique des fichiers de Class
 * @param string $class_name
 */
function __autoload($class_name = ""){
    $repertoires = array(
        'controllers',
        'models',
        'views',
        'system'
    );
    foreach ($repertoires as $repertoire){
        if(file_exists("{$repertoire}/{$class_name}.php")){
            include_once("{$repertoire}/{$class_name}.php");
        }
    }
}