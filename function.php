<?php
$result =[];

function soal1($range)
{
	for ($i = 0; $i < $range; $i++) {
		for ($j = 0; $j < $range; $j++) {
			if ($i == $j) {
				$result[$i][$j] = '*';
			} else {
				$result[$i][$j] = ' ';
			}
		}
	}

	printArray($result);
}

function printArray($array)
{
	for ($i = 0; $i < count($array); $i++) {
		for ($j = 0; $j < count($array); $j++) {
			echo $array[$i][$j];
		}

		echo "\n";
	}
}

soal1(9);