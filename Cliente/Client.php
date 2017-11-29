<?php 

class Client
{
	private $name;
	public function __construct($name) {
		$this->name = $name;
	}

	public function getNome() {
		return $this->name;
	}
}