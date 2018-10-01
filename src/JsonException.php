<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 16:23
 */

namespace Like\Json;

use RuntimeException;

class JsonException extends RuntimeException {

	/**
	 * @var object
	 */
	private $object;

	public function __construct($object) {
		parent::__construct(json_last_error_msg() . ". " . print_r($object,true), json_last_error());
		$this->object = $object;
	}

	/**
	 * @return object
	 */
	public function getObject() {
		return $this->object;
	}

}