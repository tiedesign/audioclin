<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/ISO8859/8859-3.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_decode_iso_8859_3($string)
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
					"\xA1" => "\xC4\xA6",
					"\xA2" => "\xCB\x98",
					"\xA3" => "\xC2\xA3",
					"\xA4" => "\xC2\xA4",
					"\xA6" => "\xC4\xA4",
					"\xA7" => "\xC2\xA7",
					"\xA8" => "\xC2\xA8",
					"\xA9" => "\xC4\xB0",
					"\xAA" => "\xC5\x9E",
					"\xAB" => "\xC4\x9E",
					"\xAC" => "\xC4\xB4",
					"\xAD" => "\xC2\xAD",
					"\xAF" => "\xC5\xBB",
					"\xB0" => "\xC2\xB0",
					"\xB1" => "\xC4\xA7",
					"\xB2" => "\xC2\xB2",
					"\xB3" => "\xC2\xB3",
					"\xB4" => "\xC2\xB4",
					"\xB5" => "\xC2\xB5",
					"\xB6" => "\xC4\xA5",
					"\xB7" => "\xC2\xB7",
					"\xB8" => "\xC2\xB8",
					"\xB9" => "\xC4\xB1",
					"\xBA" => "\xC5\x9F",
					"\xBB" => "\xC4\x9F",
					"\xBC" => "\xC4\xB5",
					"\xBD" => "\xC2\xBD",
					"\xBF" => "\xC5\xBC",
					"\xC0" => "\xC3\x80",
					"\xC1" => "\xC3\x81",
					"\xC2" => "\xC3\x82",
					"\xC4" => "\xC3\x84",
					"\xC5" => "\xC4\x8A",
					"\xC6" => "\xC4\x88",
					"\xC7" => "\xC3\x87",
					"\xC8" => "\xC3\x88",
					"\xC9" => "\xC3\x89",
					"\xCA" => "\xC3\x8A",
					"\xCB" => "\xC3\x8B",
					"\xCC" => "\xC3\x8C",
					"\xCD" => "\xC3\x8D",
					"\xCE" => "\xC3\x8E",
					"\xCF" => "\xC3\x8F",
					"\xD1" => "\xC3\x91",
					"\xD2" => "\xC3\x92",
					"\xD3" => "\xC3\x93",
					"\xD4" => "\xC3\x94",
					"\xD5" => "\xC4\xA0",
					"\xD6" => "\xC3\x96",
					"\xD7" => "\xC3\x97",
					"\xD8" => "\xC4\x9C",
					"\xD9" => "\xC3\x99",
					"\xDA" => "\xC3\x9A",
					"\xDB" => "\xC3\x9B",
					"\xDC" => "\xC3\x9C",
					"\xDD" => "\xC5\xAC",
					"\xDE" => "\xC5\x9C",
					"\xDF" => "\xC3\x9F",
					"\xE0" => "\xC3\xA0",
					"\xE1" => "\xC3\xA1",
					"\xE2" => "\xC3\xA2",
					"\xE4" => "\xC3\xA4",
					"\xE5" => "\xC4\x8B",
					"\xE6" => "\xC4\x89",
					"\xE7" => "\xC3\xA7",
					"\xE8" => "\xC3\xA8",
					"\xE9" => "\xC3\xA9",
					"\xEA" => "\xC3\xAA",
					"\xEB" => "\xC3\xAB",
					"\xEC" => "\xC3\xAC",
					"\xED" => "\xC3\xAD",
					"\xEE" => "\xC3\xAE",
					"\xEF" => "\xC3\xAF",
					"\xF1" => "\xC3\xB1",
					"\xF2" => "\xC3\xB2",
					"\xF3" => "\xC3\xB3",
					"\xF4" => "\xC3\xB4",
					"\xF5" => "\xC4\xA1",
					"\xF6" => "\xC3\xB6",
					"\xF7" => "\xC3\xB7",
					"\xF8" => "\xC4\x9D",
					"\xF9" => "\xC3\xB9",
					"\xFA" => "\xC3\xBA",
					"\xFB" => "\xC3\xBB",
					"\xFC" => "\xC3\xBC",
					"\xFD" => "\xC5\xAD",
					"\xFE" => "\xC5\x9D",
					"\xFF" => "\xCB\x99");
		
		$outStr = '';
    	for ($i = 0, $len = strlen($string); $i < $len; $i++)
    	{
    		$outStr .= (array_key_exists($string{$i}, $mapping))?$mapping[$string{$i}]:$string{$i};
		}
		
		return $outStr;
	}

