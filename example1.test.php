<?php 

use PHPUnit\Framework\TestCase;

class Example1 extends TestCase
{
	public function testSoma() {
		$soma = 2 + 3;
		$this->assertSame(5, $soma);	
	}

	public function testTrue() {
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}

	public function testFalse() {
		$false = false;

		$this->assertFalse($false);
	}

	public function testCount() {
		$array = [0,1,2];

		$this->assertCount(3, $array);
	}

	public function testEmpty() {
		$vazio = null;

		$this->assertEmpty($vazio);
	}

	public function testNull() {
		$vazio = '';

		$this->assertNull($vazio);
	}

	public function testEqual() {
		$a = "1";
		$b = 1;

		$this->assertEquals($a, $b);
	}
}