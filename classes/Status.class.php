<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 16:12
 */

class Status
{
    private $status;
    private $statuss;
    private $qtdeStatus;
    private $stCodigo;
    private $mensagem;

    function __construct()
    {
        $this->status = new StatusDados();
        $this->statuss = Array();
        $this->qtdeStatus = 0;
        $this->stCodigo = 0;
        $this->mensagem = "";
    }

    public function gravaStatus($stDescricao, $conn)
    {
        $this->status->setDados(0, $stDescricao);
        $this->status->gravaStatus($conn);
        $this->setStCodigo($this->status->getStCodigo());
        $this->setMensagem($this->status->getMensagem());
    }

    public function consultaStatus($conn)
    {
        try {
            if(@Sessions::getSession("CONECTADO")){
                $sqlStatus = $conn->prepare("SELECT stCodigo, stDescricao FROM status ORDER BY stDescricao ASC");
                $sqlStatus->execute();
                if($sqlStatus->rowCount()>0){
                    $this->resultFetchArray($sqlStatus);
                }
            }else{
                $this->setMensagem("Ops! Ocorreu algum erro com sua conexão com a internet, tente novamente!");
            }
        } catch (Exception $exc) {
            $this->setMensagem("Ops! Ocorreu um erro no servidor, tente novamente!");
        }
    }

    public function consultaStatusPorCodigo($stCodigo, $conn)
    {
        try {
            if(@Sessions::getSession("CONECTADO")){
                $sqlStatus = $conn->prepare("SELECT stCodigo, stDescricao FROM status WHERE stCodigo=? ORDER BY stDescricao ASC");
                $sqlStatus->bindValue(1, $stCodigo);
                $sqlStatus->execute();
                if($sqlStatus->rowCount()>0){
                    $this->resultFetchArray($sqlStatus);
                }
            }else{
                $this->setMensagem("Ops! Ocorreu algum erro com sua conexão com a internet, tente novamente!");
            }
        } catch (Exception $exc) {
            $this->setMensagem("Ops! Ocorreu um erro no servidor, tente novamente!");
        }
    }

    public function consultaStatusPorDescricao($stDescricao, $conn)
    {
        try {
            if(@Sessions::getSession("CONECTADO")){
                $sqlStatus = $conn->prepare("SELECT stCodigo, stDescricao FROM status WHERE stDescricao=? ORDER BY stDescricao ASC");
                $sqlStatus->bindValue(1, $stDescricao);
                $sqlStatus->execute();
                if($sqlStatus->rowCount()>0){
                    $this->resultFetchArray($sqlStatus);
                }
            }else{
                $this->setMensagem("Ops! Ocorreu algum erro com sua conexão com a internet, tente novamente!");
            }
        } catch (Exception $exc) {
            $this->setMensagem("Ops! Ocorreu um erro no servidor, tente novamente!");
        }
    }

    private function resultFetchArray($fetchArray)
    {
        if($fetchArray->rowCount()>0){
            $this->setQtdeStatus($fetchArray->rowCount());
            while($Arr = $fetchArray->fetch(PDO::FETCH_OBJ)){
                $this->status->setDados($Arr->stCodigo, $Arr->stDescricao);
                $this->setStatuss($this->status);
                $this->limpaObj();
            }
        }
    }

    private function limpaObj()
    {
        $this->status = new StatusDados();
    }

    public function getStatuss()
    {
        return $this->statuss;
    }

    public function setStatuss($statuss)
    {
        $this->statuss[] = $statuss;
    }

    public function getQtdeStatus()
    {
        return $this->qtdeStatus;
    }

    public function setQtdeStatus($qtdeStatus)
    {
        $this->qtdeStatus = $qtdeStatus;
    }

    public function getStCodigo()
    {
        return $this->stCodigo;
    }

    public function setStCodigo($stCodigo)
    {
        $this->stCodigo = $stCodigo;
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

}
