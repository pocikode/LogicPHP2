<?php
namespace App\Logic;

class Logic1 extends Logic
{
    protected function soal1($range)
    {
    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($y==$x) {
    				self::$result[$y][$x] = '*';
    			} else {
    				self::$result[$y][$x] = ' ';
    			}
    		}
    	}

    	print_r(self::$result);
    }

    protected function soal2($range)
    {
    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($y==$range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal3($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($y==$x || $y==$range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal4($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($y==$x || $y==$range-$x-1) {
    				self::$result[$x][$y] = "*";
    			} elseif ($y==floor($range/2) || $x==floor($range/2)) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal5($range)
    {
    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($x <= $y) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal6($range)
    {
    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($y >= $range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal7($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($x <= $y && $y >= $range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} elseif ($x >= $y && $y <= $range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }

    protected function soal8($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 0; $y < $range; $y++) {
    		for ($x = 0; $x < $range; $x++) {
    			if ($x <= $y && $y <= $range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} elseif ($x >= $y && $y >= $range-$x-1) {
    				self::$result[$y][$x] = "*";
    			} else {
    				self::$result[$y][$x] = " ";
    			}
    		}
    	}
    }
}
