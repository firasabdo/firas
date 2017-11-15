<?php 

include "autoload.php";

//var_dump($_GET);
//var_dump($_POST);

if(isset($_GET['c'])){
    if(isset($_GET['m'])){
        $c = $_GET['c'];
        $m = $_GET['m'];
    }
}
else{
    $c = "CtrlContact";
    $m = "getForm";
}


/**
 * Route
 */

$ctrl = new $c;
$ctrl->$m();
