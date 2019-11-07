<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 16:22
 */

namespace Like\Json;

use Like\Encoding\Utf8;

class Encode {

	/**
	 * @param mixed $array
	 * @return string
	 * @throws JsonException
	 */
	public static function encode($array) {
		$json = json_encode($array);

		if($json === false || json_last_error() !== JSON_ERROR_NONE) {
			throw new JsonException($array);
		}

		return $json;
	}

	/**
	 * @param $array
	 * @return string
	 */
	public static function encodeSafe($array) {
		try {
			return self::encode($array);
		} catch(JsonException $ex) {
			return self::encode(Utf8::encode($array));
		}
	}

}