<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 17:24
 */

namespace Like\Json\Tests;

use Like\Json\Decode;
use PHPUnit_Framework_TestCase;

class DecodeTest extends PHPUnit_Framework_TestCase {

	public function testEncode() {
		$this->assertEquals(array("Liké"), Decode::decode('["Liké"]'));
	}

	public function testEncodeSafe() {
		$this->assertEquals(array("Liké"), Decode::decode('["Liké"]'));
	}

}
