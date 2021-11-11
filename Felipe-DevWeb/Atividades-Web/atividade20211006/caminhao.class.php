<?php

//caminhao.class.php

include_once("veiculo.class.php");

class Caminhao extends Veiculo
{
    public $carga;
    public function __construct()
    {

    }
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }

    public function getCarga()
    {
        return $this->carga;
    }
    public function show()
    {
        Echo "caminhao";
    }

}