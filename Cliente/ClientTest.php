<?php 
use PHPUnit\Framework\TestCase;

require 'Client.php';

class ClientTest extends TestCase
{
	public function testCriacaoCliente() {
		$cliente = new Client('Ronaldo');

		$this->assertSame('Ronaldo', $cliente->getNome());
	}
}