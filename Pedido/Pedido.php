<?php 
require '../Estoque/Estoque.php';

class Pedido
{
	private $item;
	private $quantidade;
	private $finalizado = false;

	public function __construct($item, $quantidade) {
		$this->item = $item;
		$this->quantidade = $quantidade;
	}

	public function fecharPedido(Estoque $estoque) {
		if ($estoque->getItem($this->item) >= $this->quantidade) {
			$this->finalizado = true;
			$estoque->removeItem($this->item, $this->quantidade);
		}
	}

	public function isFinalizado() {
		return $this->finalizado;
	}
}