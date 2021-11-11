<?php

use App\Model\Produto;

require_once "model/Produto.php";

    class ProdutoController{
        public function listar(){
            $produto = new Produto();
            $produtos = $produto->read();

            $_REQUEST["produtos"]=$produtos;

            require_once "view/produto_view.php";
        }
    }