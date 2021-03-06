<?php

	/**
	 * Original data taken from:
	 * ftp://ftp.unicode.org/Public/MAPPINGS/VENDORS/MICSFT/WINDOWS/CP1255.TXT
	 * @param string $string
	 * @return string
	 */
	function charset_decode_windows_1255($string)
	{
		$mapping = array(
					"\x80" => "\xE2\x82\xAC",
					"\x82" => "\xE2\x80\x9A",
					"\x83" => "\xC6\x92",
					"\x84" => "\xE2\x80\x9E",
					"\x85" => "\xE2\x80\xA6",
					"\x86" => "\xE2\x80\xA0",
					"\x87" => "\xE2\x80\xA1",
					"\x88" => "\xCB\x86",
					"\x89" => "\xE2\x80\xB0",
					"\x8B" => "\xE2\x80\xB9",
					"\x91" => "\xE2\x80\x98",
					"\x92" => "\xE2\x80\x99",
					"\x93" => "\xE2\x80\x9C",
					"\x94" => "\xE2\x80\x9D",
					"\x95" => "\xE2\x80\xA2",
					"\x96" => "\xE2\x80\x93",
					"\x97" => "\xE2\x80\x94",
					"\x98" => "\xCB\x9C",
					"\x99" => "\xE2\x84\xA2",
					"\x9B" => "\xE2\x80\xBA",
					"\xA0" => "\xC2\xA0",
					"\xA1" => "\xC2\xA1",
					"\xA2" => "\xC2\xA2",
					"\xA3" => "\xC2\xA3",
					"\xA4" => "\xE2\x82\xAA",
					"\xA5" => "\xC2\xA5",
					"\xA6" => "\xC2\xA6",
					"\xA7" => "\xC2\xA7",
					"\xA8" => "\xC2\xA8",
					"\xA9" => "\xC2\xA9",
					"\xAA" => "\xC3\x97",
					"\xAB" => "\xC2\xAB",
					"\xAC" => "\xC2\xAC",
					"\xAD" => "\xC2\xAD",
					"\xAE" => "\xC2\xAE",
					"\xAF" => "\xC2\xAF",
					"\xB0" => "\xC2\xB0",
					"\xB1" => "\xC2\xB1",
					"\xB2" => "\xC2\xB2",
					"\xB3" => "\xC2\xB3",
					"\xB4" => "\xC2\xB4",
					"\xB5" => "\xC2\xB5",
					"\xB6" => "\xC2\xB6",
					"\xB7" => "\xC2\xB7",
					"\xB8" => "\xC2\xB8",
					"\xB9" => "\xC2\xB9",
					"\xBA" => "\xC3\xB7",
					"\xBB" => "\xC2\xBB",
					"\xBC" => "\xC2\xBC",
					"\xBD" => "\xC2\xBD",
					"\xBE" => "\xC2\xBE",
					"\xBF" => "\xC2\xBF",
					"\xC0" => "\xD6\xB0",
					"\xC1" => "\xD6\xB1",
					"\xC2" => "\xD6\xB2",
					"\xC3" => "\xD6\xB3",
					"\xC4" => "\xD6\xB4",
					"\xC5" => "\xD6\xB5",
					"\xC6" => "\xD6\xB6",
					"\xC7" => "\xD6\xB7",
					"\xC8" => "\xD6\xB8",
					"\xC9" => "\xD6\xB9",
					"\xCB" => "\xD6\xBB",
					"\xCC" => "\xD6\xBC",
					"\xCD" => "\xD6\xBD",
					"\xCE" => "\xD6\xBE",
					"\xCF" => "\xD6\xBF",
					"\xD0" => "\xD7\x80",
					"\xD1" => "\xD7\x81",
					"\xD2" => "\xD7\x82",
					"\xD3" => "\xD7\x83",
					"\xD4" => "\xD7\xB0",
					"\xD5" => "\xD7\xB1",
					"\xD6" => "\xD7\xB2",
					"\xD7" => "\xD7\xB3",
					"\xD8" => "\xD7\xB4",
					"\xE0" => "\xD7\x90",
					"\xE1" => "\xD7\x91",
					"\xE2" => "\xD7\x92",
					"\xE3" => "\xD7\x93",
					"\xE4" => "\xD7\x94",
					"\xE5" => "\xD7\x95",
					"\xE6" => "\xD7\x96",
					"\xE7" => "\xD7\x97",
					"\xE8" => "\xD7\x98",
					"\xE9" => "\xD7\x99",
					"\xEA" => "\xD7\x9A",
					"\xEB" => "\xD7\x9B",
					"\xEC" => "\xD7\x9C",
					"\xED" => "\xD7\x9D",
					"\xEE" => "\xD7\x9E",
					"\xEF" => "\xD7\x9F",
					"\xF0" => "\xD7\xA0",
					"\xF1" => "\xD7\xA1",
					"\xF2" => "\xD7\xA2",
					"\xF3" => "\xD7\xA3",
					"\xF4" => "\xD7\xA4",
					"\xF5" => "\xD7\xA5",
					"\xF6" => "\xD7\xA6",
					"\xF7" => "\xD7\xA7",
					"\xF8" => "\xD7\xA8",
					"\xF9" => "\xD7\xA9",
					"\xFA" => "\xD7\xAA",
					"\xFD" => "\xE2\x80\x8E",
					"\xFE" => "\xE2\x80\x8F");

		$outStr = '';
    	for ($i = 0, $len = strlen($string); $i < $len; $i++)
    	{
    		$outStr .= (array_key_exists($string{$i}, $mapping))?$mapping[$string{$i}]:$string{$i};
		}
		
		return $outStr;
	}

