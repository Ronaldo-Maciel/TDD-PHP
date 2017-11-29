<?php 
class Estoque
{
	private $items = [];

	public function addItem($item, $quantidade) {
		if ( isset($this->items[$item]) ) {
			$quantidade += $this->items[$item];
		}
		$this->items[$item] = $quantidade;
	}

	public function getItem($item) {
		if ( isset($this->items[$item]) ) {
			return $this->items[$item];
		}

		throw new InvalidArgumentException("Item nao existe no estoque");
	}
}