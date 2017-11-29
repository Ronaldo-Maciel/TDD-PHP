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
					  ->method("removeItem")
					  ->with(
					  		$this->equalTo($item),
					  		$this->equalTo($quantidade)
					  	);

		$pedido = new Pedido($item, $quantidade);
		$pedido->fecharPedido($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
	}

	public function testNaoDeveFecharPedido() {
		$item = "Blusa X";
		$quantidade = 3;

		$this->estoque->expects($this->once())
			 ->method('getItem')
			 ->with($this->equalTo($item))
			 ->will($this->returnValue(0));
		$this->estoque->expects($this->never())
			 ->method('removeItem');
			 $pedido = new Pedido($item, $quantidade);
			 $pedido->fecharPedido($this->estoque);
			 $this->assertFalse($pedido->isFinalizado());


	}
}