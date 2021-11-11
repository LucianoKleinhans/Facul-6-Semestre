<?php
require_once "vendor/autoload.php";

use App\Model\Produto;
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    private $produto;

    public static function setUpBeforeClass(): void
    {
        //Aqui o codigo será executado antes de todos os testes.
    }

    public function setUp(): void
    {
        $this->produto = new Produto();
    }

    public function testGetCodProd()
    {
        $this->assertEquals($this->produto->getCodProduto(), 0);
        $this->produto->setCodProduto(1);
        $this->assertEquals($this->produto->getCodProduto(), 1);
    }

    public function testGetDescricao()
    {
        $this->assertEquals($this->produto->getDescricao(), "");
        $this->produto->setDescricao("Arroz");
        $this->assertEquals($this->produto->getDescricao(), "Arroz");
    }

    public function testGetValorUni()
    {
        $this->assertEquals($this->produto->getValorUni(), "");
        $this->produto->setValorUni("10");
        $this->assertEquals($this->produto->getValorUni(), "10");
    }

    public function testRead()
    {
        $this->assertIsArray($this->produto->read());
    }
    
}
