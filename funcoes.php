<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 15:04
 */

//Hor�rio do Brasil - S�o Paulo
date_default_timezone_set("Brazil/East");
function __autoload($classe){
    if (file_exists("classes/{$classe}.class.php")){
        include_once "classes/{$classe}.class.php";
    }
}
?>