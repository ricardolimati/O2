<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 16:18
 */

class StatusDados
{
    private $stCodigo;
    private $stDescricao;
    private $mensagem;

    function __construct() {
        $this->stCodigo = 0;
        $this->stDescricao = "";
        $this->mensagem = "";
    }

    function setDados($stCodigo, $stDescricao) {
        $this->stCodigo = $stCodigo;
        $this->stDescricao = $stDescricao;
    }

    public function gravaStatus($conn){
        try {
            if(@Sessions::getSession("CONECTADO")){
                if(!$this->isDuplicidade($conn)){
                    $insStatus = $conn->prepare("INSERT INTO status(stDescricao) VALUES(?)");
                    $insStatus->bindValue(1, $this->getStDescricao());
                    if($insStatus->execute()){
                        $this->setStCodigo($conn->lastInsertId());
                        $this->setMensagem("Gravado com sucesso!");
                    }else{
                        $this->setMensagem("Ops! Ocorreu um erro ao gravar as suas informações, tente novamente!");
                    }
                }
            }else{
                $this->setMensagem("Ops! Ocorreu algum erro com sua conexão com a internet, tente novamente!");
            }
        } catch (Exception $exc) {
            $this->setMensagem("Ops! Ocorreu um erro no servidor, tente novamente!");
        }
    }

    public function isDuplicidade($conn){
        try {
            if(@Sessions::getSession("CONECTADO")){
                //echo "SELECT stCodigo FROM status WHERE stDescricao=$this->getStDescricao()";
                $sqlStatus = $conn->prepare("SELECT stCodigo FROM status WHERE stDescricao=?");
                $sqlStatus->bindValue(1, $this->getStDescricao());
                $sqlStatus->execute();
                if($sqlStatus->rowCount()>0){
                    return true;
                }else{
                    $Arr =  $sqlStatus->fetch(PDO::FETCH_OBJ);
                    $this->setStCodigo($Arr->stCodigo);
                    $this->setMensagem("Status já existente!");
                }
            }
            return false;
        } catch (Exception $exc) {
            return false;
        }
    }


    public function getStCodigo() {
        return $this->stCodigo;
    }

    public function setStCodigo($stCodigo) {
        $this->stCodigo = $stCodigo;
    }

    public function getStDescricao() {
        return $this->stDescricao;
    }

    public function setStDescricao($stDescricao) {
        $this->stDescricao = $stDescricao;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

}
?>
