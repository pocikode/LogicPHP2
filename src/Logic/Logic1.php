<?php
namespace App\Logic;

class Logic1 extends Logic
{
    protected function soal1($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$x) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal2($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$range-($x-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal3($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$x || $y==$range-($x-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal4($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$x || $y==$range-($x-1)) {
    				self::$result .= "*";
    			} elseif ($y==round($range/2) || $x==round($range/2)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal5($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($x <= $y) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal6($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y >= $range-($x-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal7($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($x <= $y && $y >= $range-($x-1)) {
    				self::$result .= "*";
    			} elseif ($x >= $y && $y <= $range-($x-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    protected function soal8($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($x <= $y && $y <= $range-($x-1)) {
    				self::$result .= "*";
    			} elseif ($x >= $y && $y >= $range-($x-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }
}
