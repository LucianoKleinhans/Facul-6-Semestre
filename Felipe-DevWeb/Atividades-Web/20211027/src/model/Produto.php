<?php

namespace App\Model;

use mysqli;

class Produto{
    private $codproduto;
    private $descricao;
    //private $unidade;
    private $valoruni;

    public function getCodProduto(){
        return $this->codproduto;
    }

    public function setCodProduto($codproduto){
        $this->codproduto = $codproduto;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getValorUni(){
        return $this->valoruni;
    }

    public function setValorUni($valoruni){
        $this->valoruni = $valoruni;
    }

    

    public function __construct()
    {
        $this->codproduto=0;
        $this->conectaBD();
    }

    private function conectaBD(){
        $server = "localhost";
        $user = "root";
        $pass = "";
        $mydb = "vendas";

        $this->conn = new mysqli($server,$user,$pass,$mydb);
        if($this->conn->error)
            die("Conexão Falhou: ".$this->conn->connect_error);
    }

    public function create(){
        $sql = "INSERT INTO produto (DESCRICAO, VALOR_UN) VALUES ('$this->descricao','$this->valoruni')";
        $this->conn->query($sql);
    }

    public function update(){
        $sql = "UPDATE produto SET DESCRICAO='".$this->getDescricao()."', VALOR_UN='".$this->getValorUni()."' WHERE CODPROD='".$this->getCodProduto()."'";
        echo $sql;
    }

    public function delete(){
        $sql = "DELETE FROM produto
        WHERE CODPROD=".$this->getCodProduto();
        $this->conn->query($sql);
    }

    public function read(){
        $sql = "SELECT * FROM produto";
        $returnValue = array();
        $result = $this->conn->query($sql);
        
        if ($result != null) {
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                if (!empty($row)) {
                    array_push($returnValue,$row);
                }
            }
        }
        return $returnValue;
        }
}