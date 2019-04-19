<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 12:39
 */
class ConnBD{
    public static function Connectar(){
        try {
            $hostName = "mysql:host=localhost; dbname=ricardol_assim";
            $user = "ricardol_master";
            $senha = "pWO~(DHVYCyx";
            $conn = new PDO($hostName, $user, $senha);

            if(@$conn->errorCode()==0){
                ConnBD::conectado(true);
                return $conn;
            }else{
                ConnBD::conectado(false);
                Sessions::dellSession("CONN");
                return "";
            }
        } catch (PDOException $exc) {
            ConnBD::conectado(false);
            Sessions::dellSession("CONN");
            return "";
        }
    }
    private static function conectado($conn) {
        Sessions::addSession('CONECTADO', $conn);
    }
    public static function Desconectar(){
        Sessions::dellSession("CONN");
    }
}