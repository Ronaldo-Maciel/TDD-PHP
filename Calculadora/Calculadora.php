<?php 

class Calculadora
{
	private $num1;
	private $num2;

	public function __construct($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}

	public function getNum1() {
		return $this->num1;
	}

	public function getNum2() {
		return $this->num2;
	}

	public function getSoma() {
		return $this->getNum1() + $this->getNum2();
	}

	public function getSubtrair() {
		return $this->getNum1() - $this->getNum2();
	}

	public function getMultiplicar() {
		return $this->getNum1() * $this->getNum2();
	}
}