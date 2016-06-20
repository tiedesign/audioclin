<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/ISO8859/8859-16.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_encode_iso_8859_16($string)
	{
		$mapping = array(
					"\xC2\x80" => "\x80",
					"\xC2\x81" => "\x81",
					"\xC2\x82" => "\x82",
					"\xC2\x83" => "\x83",
					"\xC2\x84" => "\x84",
					"\xC2\x85" => "\x85",
					"\xC2\x86" => "\x86",
					"\xC2\x87" => "\x87",
					"\xC2\x88" => "\x88",
					"\xC2\x89" => "\x89",
					"\xC2\x8A" => "\x8A",
					"\xC2\x8B" => "\x8B",
					"\xC2\x8C" => "\x8C",
					"\xC2\x8D" => "\x8D",
					"\xC2\x8E" => "\x8E",
					"\xC2\x8F" => "\x8F",
					"\xC2\x90" => "\x90",
					"\xC2\x91" => "\x91",
					"\xC2\x92" => "\x92",
					"\xC2\x93" => "\x93",
					"\xC2\x94" => "\x94",
					"\xC2\x95" => "\x95",
					"\xC2\x96" => "\x96",
					"\xC2\x97" => "\x97",
					"\xC2\x98" => "\x98",
					"\xC2\x99" => "\x99",
					"\xC2\x9A" => "\x9A",
					"\xC2\x9B" => "\x9B",
					"\xC2\x9C" => "\x9C",
					"\xC2\x9D" => "\x9D",
					"\xC2\x9E" => "\x9E",
					"\xC2\x9F" => "\x9F",
					"\xC2\xA0" => "\xA0",
					"\xC4\x84" => "\xA1",
					"\xC4\x85" => "\xA2",
					"\xC5\x81" => "\xA3",
					"\xE2\x82\xAC" => "\xA4",
					"\xE2\x80\x9E" => "\xA5",
					"\xC5\xA0" => "\xA6",
					"\xC2\xA7" => "\xA7",
					"\xC5\xA1" => "\xA8",
					"\xC2\xA9" => "\xA9",
					"\xC8\x98" => "\xAA",
					"\xC2\xAB" => "\xAB",
					"\xC5\xB9" => "\xAC",
					"\xC2\xAD" => "\xAD",
					"\xC5\xBA" => "\xAE",
					"\xC5\xBB" => "\xAF",
					"\xC2\xB0" => "\xB0",
					"\xC2\xB1" => "\xB1",
					"\xC4\x8C" => "\xB2",
					"\xC5\x82" => "\xB3",
					"\xC5\xBD" => "\xB4",
					"\xE2\x80\x9D" => "\xB5",
					"\xC2\xB6" => "\xB6",
					"\xC2\xB7" => "\xB7",
					"\xC5\xBE" => "\xB8",
					"\xC4\x8D" => "\xB9",
					"\xC8\x99" => "\xBA",
					"\xC2\xBB" => "\xBB",
					"\xC5\x92" => "\xBC",
					"\xC5\x93" => "\xBD",
					"\xC5\xB8" => "\xBE",
					"\xC5\xBC" => "\xBF",
					"\xC3\x80" => "\xC0",
					"\xC3\x81" => "\xC1",
					"\xC3\x82" => "\xC2",
					"\xC4\x82" => "\xC3",
					"\xC3\x84" => "\xC4",
					"\xC4\x86" => "\xC5",
					"\xC3\x86" => "\xC6",
					"\xC3\x87" => "\xC7",
					"\xC3\x88" => "\xC8",
					"\xC3\x89" => "\xC9",
					"\xC3\x8A" => "\xCA",
					"\xC3\x8B" => "\xCB",
					"\xC3\x8C" => "\xCC",
					"\xC3\x8D" => "\xCD",
					"\xC3\x8E" => "\xCE",
					"\xC3\x8F" => "\xCF",
					"\xC4\x90" => "\xD0",
					"\xC5\x83" => "\xD1",
					"\xC3\x92" => "\xD2",
					"\xC3\x93" => "\xD3",
					"\xC3\x94" => "\xD4",
					"\xC5\x90" => "\xD5",
					"\xC3\x96" => "\xD6",
					"\xC5\x9A" => "\xD7",
					"\xC5\xB0" => "\xD8",
					"\xC3\x99" => "\xD9",
					"\xC3\x9A" => "\xDA",
					"\xC3\x9B" => "\xDB",
					"\xC3\x9C" => "\xDC",
					"\xC4\x98" => "\xDD",
					"\xC8\x9A" => "\xDE",
					"\xC3\x9F" => "\xDF",
					"\xC3\xA0" => "\xE0",
					"\xC3\xA1" => "\xE1",
					"\xC3\xA2" => "\xE2",
					"\xC4\x83" => "\xE3",
					"\xC3\xA4" => "\xE4",
					"\xC4\x87" => "\xE5",
					"\xC3\xA6" => "\xE6",
					"\xC3\xA7" => "\xE7",
					"\xC3\xA8" => "\xE8",
					"\xC3\xA9" => "\xE9",
					"\xC3\xAA" => "\xEA",
					"\xC3\xAB" => "\xEB",
					"\xC3\xAC" => "\xEC",
					"\xC3\xAD" => "\xED",
					"\xC3\xAE" => "\xEE",
					"\xC3\xAF" => "\xEF",
					"\xC4\x91" => "\xF0",
					"\xC5\x84" => "\xF1",
					"\xC3\xB2" => "\xF2",
					"\xC3\xB3" => "\xF3",
					"\xC3\xB4" => "\xF4",
					"\xC5\x91" => "\xF5",
					"\xC3\xB6" => "\xF6",
					"\xC5\x9B" => "\xF7",
					"\xC5\xB1" => "\xF8",
					"\xC3\xB9" => "\xF9",
					"\xC3\xBA" => "\xFA",
					"\xC3\xBB" => "\xFB",
					"\xC3\xBC" => "\xFC",
					"\xC4\x99" => "\xFD",
					"\xC8\x9B" => "\xFE",
					"\xC3\xBF" => "\xFF");

		return str_replace(array_keys($mapping), array_values($mapping), $string);
	}

