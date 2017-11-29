<?php 

require 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	private $calculadora;

	public function setUp() {
		$this->calculadora = new Calculadora(3,3);
	}
	public function testSoma() {
		$this->assertSame(6, $this->calculadora->getSoma());
	}

	public function testSubtrair() {
		$this->assertSame(0, $this->calculadora->getSubtrair());
	}

	public function testMultiplicar() {
		$this->assertSame(9, $this->calculadora->getMultiplicar());
	}
}