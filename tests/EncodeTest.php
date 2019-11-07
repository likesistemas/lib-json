<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 17:24
 */

namespace Like\Json\Tests;

use Like\Json\Encode;
use Like\Json\JsonException;

class EncodeTest extends \PHPUnit_Framework_TestCase {

	public function testEncodeArray() {
		$this->assertEquals('{"id":1,"nome":"Like Sistemas","cnpj":"08207823000102"}', Encode::encode([
			'id' => 1,
			'nome' => 'Like Sistemas',
			'cnpj' => '08207823000102'
		]));
	}

	public function testEncode() {
		$this->setExpectedException(JsonException::class);
		$this->assertEquals(array(chr(134)), Encode::encode(array(chr(134))));
	}

	public function testEncodeSafe() {
		$array = Encode::encodeSafe(array(chr(134)));
		$this->assertTrue(is_string($array), print_r($array));
		$this->assertEquals('["\u0086"]', $array, print_r($array));
	}

}
