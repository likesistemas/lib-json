<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 17:24
 */

namespace Like\Json\Tests;

use Like\Json\Decode;
use Like\Json\Encode;
use Like\Json\JsonException;
use PHPUnit_Framework_TestCase;

class DecodeTest extends PHPUnit_Framework_TestCase {

	public function testDecodeArray() {
		$this->assertEquals([
			'id' => 1,
			'nome' => 'Like Sistemas',
			'cnpj' => '08207823000102'
		], Decode::decode('{"id":1,"nome":"Like Sistemas","cnpj":"08207823000102"}'));
	}

	public function testDecode() {
		$this->assertEquals(array("Liké"), Decode::decode('["Liké"]'));
	}

	public function testDecodeSafe() {
		$this->assertEquals(array("Liké"), Decode::decode('["Liké"]'));
	}

	public function testDecodeError() {
		$this->setExpectedException(JsonException::class,'', JSON_ERROR_SYNTAX);
		Decode::decode('x');
	}

}
