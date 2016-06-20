<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/ISO8859/8859-11.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_decode_iso_8859_11($string)
	{
		$mapping = array(
					"\x80" => "\xC2\x80",
					"\x81" => "\xC2\x81",
					"\x82" => "\xC2\x82",
					"\x83" => "\xC2\x83",
					"\x84" => "\xC2\x84",
					"\x85" => "\xC2\x85",
					"\x86" => "\xC2\x86",
					"\x87" => "\xC2\x87",
					"\x88" => "\xC2\x88",
					"\x89" => "\xC2\x89",
					"\x8A" => "\xC2\x8A",
					"\x8B" => "\xC2\x8B",
					"\x8C" => "\xC2\x8C",
					"\x8D" => "\xC2\x8D",
					"\x8E" => "\xC2\x8E",
					"\x8F" => "\xC2\x8F",
					"\x90" => "\xC2\x90",
					"\x91" => "\xC2\x91",
					"\x92" => "\xC2\x92",
					"\x93" => "\xC2\x93",
					"\x94" => "\xC2\x94",
					"\x95" => "\xC2\x95",
					"\x96" => "\xC2\x96",
					"\x97" => "\xC2\x97",
					"\x98" => "\xC2\x98",
					"\x99" => "\xC2\x99",
					"\x9A" => "\xC2\x9A",
					"\x9B" => "\xC2\x9B",
					"\x9C" => "\xC2\x9C",
					"\x9D" => "\xC2\x9D",
					"\x9E" => "\xC2\x9E",
					"\x9F" => "\xC2\x9F",
					"\xA0" => "\xC2\xA0",
					"\xA1" => "\xE0\xB8\x81",
					"\xA2" => "\xE0\xB8\x82",
					"\xA3" => "\xE0\xB8\x83",
					"\xA4" => "\xE0\xB8\x84",
					"\xA5" => "\xE0\xB8\x85",
					"\xA6" => "\xE0\xB8\x86",
					"\xA7" => "\xE0\xB8\x87",
					"\xA8" => "\xE0\xB8\x88",
					"\xA9" => "\xE0\xB8\x89",
					"\xAA" => "\xE0\xB8\x8A",
					"\xAB" => "\xE0\xB8\x8B",
					"\xAC" => "\xE0\xB8\x8C",
					"\xAD" => "\xE0\xB8\x8D",
					"\xAE" => "\xE0\xB8\x8E",
					"\xAF" => "\xE0\xB8\x8F",
					"\xB0" => "\xE0\xB8\x90",
					"\xB1" => "\xE0\xB8\x91",
					"\xB2" => "\xE0\xB8\x92",
					"\xB3" => "\xE0\xB8\x93",
					"\xB4" => "\xE0\xB8\x94",
					"\xB5" => "\xE0\xB8\x95",
					"\xB6" => "\xE0\xB8\x96",
					"\xB7" => "\xE0\xB8\x97",
					"\xB8" => "\xE0\xB8\x98",
					"\xB9" => "\xE0\xB8\x99",
					"\xBA" => "\xE0\xB8\x9A",
					"\xBB" => "\xE0\xB8\x9B",
					"\xBC" => "\xE0\xB8\x9C",
					"\xBD" => "\xE0\xB8\x9D",
					"\xBE" => "\xE0\xB8\x9E",
					"\xBF" => "\xE0\xB8\x9F",
					"\xC0" => "\xE0\xB8\xA0",
					"\xC1" => "\xE0\xB8\xA1",
					"\xC2" => "\xE0\xB8\xA2",
					"\xC3" => "\xE0\xB8\xA3",
					"\xC4" => "\xE0\xB8\xA4",
					"\xC5" => "\xE0\xB8\xA5",
					"\xC6" => "\xE0\xB8\xA6",
					"\xC7" => "\xE0\xB8\xA7",
					"\xC8" => "\xE0\xB8\xA8",
					"\xC9" => "\xE0\xB8\xA9",
					"\xCA" => "\xE0\xB8\xAA",
					"\xCB" => "\xE0\xB8\xAB",
					"\xCC" => "\xE0\xB8\xAC",
					"\xCD" => "\xE0\xB8\xAD",
					"\xCE" => "\xE0\xB8\xAE",
					"\xCF" => "\xE0\xB8\xAF",
					"\xD0" => "\xE0\xB8\xB0",
					"\xD1" => "\xE0\xB8\xB1",
					"\xD2" => "\xE0\xB8\xB2",
					"\xD3" => "\xE0\xB8\xB3",
					"\xD4" => "\xE0\xB8\xB4",
					"\xD5" => "\xE0\xB8\xB5",
					"\xD6" => "\xE0\xB8\xB6",
					"\xD7" => "\xE0\xB8\xB7",
					"\xD8" => "\xE0\xB8\xB8",
					"\xD9" => "\xE0\xB8\xB9",
					"\xDA" => "\xE0\xB8\xBA",
					"\xDF" => "\xE0\xB8\xBF",
					"\xE0" => "\xE0\xB9\x80",
					"\xE1" => "\xE0\xB9\x81",
					"\xE2" => "\xE0\xB9\x82",
					"\xE3" => "\xE0\xB9\x83",
					"\xE4" => "\xE0\xB9\x84",
					"\xE5" => "\xE0\xB9\x85",
					"\xE6" => "\xE0\xB9\x86",
					"\xE7" => "\xE0\xB9\x87",
					"\xE8" => "\xE0\xB9\x88",
					"\xE9" => "\xE0\xB9\x89",
					"\xEA" => "\xE0\xB9\x8A",
					"\xEB" => "\xE0\xB9\x8B",
					"\xEC" => "\xE0\xB9\x8C",
					"\xED" => "\xE0\xB9\x8D",
					"\xEE" => "\xE0\xB9\x8E",
					"\xEF" => "\xE0\xB9\x8F",
					"\xF0" => "\xE0\xB9\x90",
					"\xF1" => "\xE0\xB9\x91",
					"\xF2" => "\xE0\xB9\x92",
					"\xF3" => "\xE0\xB9\x93",
					"\xF4" => "\xE0\xB9\x94",
					"\xF5" => "\xE0\xB9\x95",
					"\xF6" => "\xE0\xB9\x96",
					"\xF7" => "\xE0\xB9\x97",
					"\xF8" => "\xE0\xB9\x98",
					"\xF9" => "\xE0\xB9\x99",
					"\xFA" => "\xE0\xB9\x9A",
					"\xFB" => "\xE0\xB9\x9B");
		
		$outStr = '';
    	for ($i = 0, $len = strlen($string); $i < $len; $i++)
    	{
    		$outStr .= (array_key_exists($string{$i}, $mapping))?$mapping[$string{$i}]:$string{$i};
		}
		
		return $outStr;
	}

