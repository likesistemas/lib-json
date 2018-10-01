<?php

/**
 * @author Ricardo Paes
 * @since 01/10/2018 às 16:22
 */

namespace Like\Json;

use Like\Encoding\Utf8;

class Decode {

	/**
	 * @param string $json
	 * @return array
	 */
	public static function decode($json) {
		$json = json_decode($json,true);

		if($json === false) {
			throw new JsonException($json);
		}

		return $json;
	}

	/**
	 * @param string $json
	 * @return array
	 */
	public static function decodeSafe($json) {
		try {
			return self::decode($json);
		} catch(JsonException $ex) {
			return self::decode(Utf8::decode($json));
		}
	}

}