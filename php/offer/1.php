<?php

function replaceSpace ($s)
{
	$result = "";

	for ($i = 0; $i < strlen($s); $i++) {
		if ($s[$i] == " ") {
			$result .= "%20";
			continue;
		}
		$result .= $s[$i];
	}
	return $result;
}


echo replaceSpace("We Are Happy") . PHP_EOL;