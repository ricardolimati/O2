<?php
/**
 * Created by PhpStorm.
 * User: RicardoLima
 * Date: 18/04/2019
 * Time: 15:14
 */

class ClientesDados
{
    private $clID;
    private $clNome;
    private $clTelefone;
    private $clEmail;
    private $clStatus;
    private $mensagem;

    /**
     * ClientesDados constructor.
     * @param $clID
     * @param $clNome
     * @param $clTelefone
     * @param $clEmail
     * @param $clStatus
     * @param $mensagem
     */
    public function __construct()
    {
        $this->clID = 0;
        $this->clNome = "";
        $this->clTelefone = "";
        $this->clEmail = "";
        $this->clStatus = 0;
        $this->mensagem = "";
    }

    public function setDados($clID, $clNome, $clTelefone, $clEmail, $clStatus)
    {
        $this->setClID($clID);
        $this->setClNome($clNome);
        $this->setClTelefone($clTelefone);
        $this->setClEmail($clEmail);
        $this->setClStatus($clStatus);
    }

    public function gravaClientes($conn){
        try {
            if(@Sessions::getSession("CONECTADO")){
                $insClientes = $conn->prepare("INSERT INTO clientes(clNome, clTelefone, clEmail, clStatus)VALUES(?,?,?,?)");
                $insClientes->bindValue(1, $this->getClNome());
                $insClientes->bindValue(2, $this->getClTelefone());
                $insClientes->bindValue(3, $this->getClEmail());
                $insClientes->bindValue(4, $this->getClStatus());
                if($insClientes->execute()){
                    $this->setClID($conn->lastInsertId());
                    $this->setMensagem("Gravado com sucesso!");
                }else{
                    $this->setMensagem("Ops! Ocorreu um erro ao gravar as suas informações, tente novamente!");
                }
            }else{
                $this->setMensagem("Ops! Ocorreu algum erro com sua conexão com a internet, tente novamente!");
            }
        } catch (Exception $exc) {
            $this->setMensagem("Ops! Ocorreu um erro no servidor, tente novamente!");
        }
    }
    /**
     * @return int
     */
    public function getClID()
    {
        return $this->clID;
    }

    /**
     * @param int $clID
     */
    public function setClID($clID)
    {
        $this->clID = $clID;
    }

    /**
     * @return string
     */
    public function getClNome()
    {
        return $this->clNome;
    }

    /**
     * @param string $clNome
     */
    public function setClNome($clNome)
    {
        $this->clNome = $clNome;
    }

    /**
     * @return string
     */
    public function getClTelefone()
    {
        return $this->clTelefone;
    }

    /**
     * @param string $clTelefone
     */
    public function setClTelefone($clTelefone)
    {
        $this->clTelefone = $clTelefone;
    }

    /**
     * @return string
     */
    public function getClEmail()
    {
        return $this->clEmail;
    }

    /**
     * @param string $clEmail
     */
    public function setClEmail($clEmail)
    {
        $this->clEmail = $clEmail;
    }

    /**
     * @return int
     */
    public function getClStatus()
    {
        return $this->clStatus;
    }

    /**
     * @param int $clStatus
     */
    public function setClStatus($clStatus)
    {
        $this->clStatus = $clStatus;
    }

    /**
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param string $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }




}