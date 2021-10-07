<?php 
include_once("carro.class.php");
include_once("caminhao.class.php");

$car = new Carro();
$car->setTipo("Sedan");
$car->setNRodas(4);
$car->setNPassageiros(2);
echo "<h1>Tipo do carro: ".$car->getTipo()."</h1>";
echo "<h2>Quantidade de rodas: ".$car->getNRodas()."</h2>";
echo "<h2>Quantidade de passageiros: ".$car->getNPassageiros()."</h2>";

$cam = new Caminhao();
$cam->setCarga("Carga pesada");
$cam->setNRodas(10);
$cam->setNPassageiros(2);
echo "<h1>Tipo do carro: ".$cam->getCarga()."</h1>";
echo "<h2>Quantidade de rodas: ".$cam->getNRodas()."</h2>";
echo "<h2>Quantidade de passageiros: ".$cam->getNPassageiros()."</h2>";
?>