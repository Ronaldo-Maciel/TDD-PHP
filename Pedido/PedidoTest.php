<?php 

require "Pedido.php";

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;
	public function setUp() {
		$this->estoque = $this->getMockBuilder("Estoque")->getMock();
	}

	public function testDeveFecharPedido() {

		$item = 'Blusa alca azul';
		$quantidade = 5;
		$this->estoque->expects($this->once())
			          ->method("getItem")
			          ->with($this->equalTo($item))
			          ->will($this->returnValue($quantidade));
		$this->estoque->expects($this->once())
					  ->methd("removeItem")
					  ->with(
					  		$this->equalTo($item),
					  		$this->equalTo($quantidade)
					  	);

		$pedido = new Pedido($item, $quantidade);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
	}
}