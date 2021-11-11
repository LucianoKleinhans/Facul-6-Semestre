<?php

//carro.class.php

include_once("veiculo.class.php");

class Carro extends Veiculo
{
    public $tipocarro;
    public $carro;
    public function __construct()
    {

    }

    public function setTipo($tipocarro)
    {
        $this->tipocarro = $tipocarro;
    }

    public function getTipo()
    {
        return $this->tipocarro;
    }

    public function show()
    {
        //echo "carro";
    }

    
}


