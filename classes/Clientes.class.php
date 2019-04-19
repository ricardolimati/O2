<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Lima
 * Date: 18/04/2019
 * Time: 15:14
 */

class Clientes
{
    private $cliente;
    private $clientes;
    private $qtdeClientes;
    private $qtdeClientesTotal;
    private $qtdePaginas;
    private $pagina;
    private $clID;
    private $mensagem;

    /**
     * Clientes constructor.
     * @param $cliente
     * @param $clientes
     * @param $qtdeClientes
     * @param $qtdeClientesTotal
     * @param $qtdePaginas
     * @param $pagina
     * @param $clCodigo
     * @param $mensagem
     */
    public function __construct()
    {
        $this->cliente = new ClientesDados();
        $this->clientes = array();
        $this->qtdeClientes = 0;
        $this->qtdeClientesTotal = 0;
        $this->qtdePaginas = 0;
        $this->pagina = 0;
        $this->clID = 0;
        $this->mensagem = "";
    }

    public function gravaCliente($clNome, $clTelfone, $clEmail, $clStatus, $conn)
    {
        $this->cliente->setDados(0, $clNome, $clTelfone, $clEmail, $clStatus);
        $this->cliente->gravaClientes($conn);
        $this->setClID($this->cliente->getClID());
        $this->setMensagem($this->cliente->getMensagem());
    }

    /**
     * @return array
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * @param array $clientes
     */
    public function setClientes($clientes)
    {
        $this->clientes = $clientes;
    }

    /**
     * @return int
     */
    public function getQtdeClientes()
    {
        return $this->qtdeClientes;
    }

    /**
     * @param int $qtdeClientes
     */
    public function setQtdeClientes($qtdeClientes)
    {
        $this->qtdeClientes = $qtdeClientes;
    }

    /**
     * @return int
     */
    public function getQtdeClientesTotal()
    {
        return $this->qtdeClientesTotal;
    }

    /**
     * @param int $qtdeClientesTotal
     */
    public function setQtdeClientesTotal($qtdeClientesTotal)
    {
        $this->qtdeClientesTotal = $qtdeClientesTotal;
    }

    /**
     * @return int
     */
    public function getQtdePaginas()
    {
        return $this->qtdePaginas;
    }

    /**
     * @param int $qtdePaginas
     */
    public function setQtdePaginas($qtdePaginas)
    {
        $this->qtdePaginas = $qtdePaginas;
    }

    /**
     * @return int
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * @param int $pagina
     */
    public function setPagina($pagina)
    {
        $this->pagina = $pagina;
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