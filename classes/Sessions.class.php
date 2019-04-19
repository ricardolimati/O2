<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 12:39
 */
class Sessions {
    private $mensagem;
    
    function __construct() {
        $this->mensagem = "";
    }
    
    public static function addSession($name, $value){
        $_SESSION[$name] = $value;
    }
    
    public static function getSession($name){
        return $_SESSION[$name];
    }
    
    public static function dellSession($name){        
        $_SESSION[$name] = "";
        $_SESSION[$name] = null;
        $_SESSION[$name] = Array();
        $_SESSION[$name] = "";
        $_SESSION[$name] = null;
    }
    
    public static function dellSessionAll(){        
        $_SESSION = "";
        $_SESSION = null;
        $_SESSION = Array();
        session_destroy();
        return true;
    }
    
}
?>