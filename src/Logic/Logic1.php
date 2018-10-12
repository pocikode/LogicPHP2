<?php
namespace App\Logic;

class Logic1 extends Logic
{
    public static function result($soal,$range)
    {
    	switch ($soal) {
    		case 1: self::soal1($range); break; case 2: self::soal2($range); break; case 3: self::soal3($range); break; case 4: self::soal4($range); break; case 5: self::soal5($range); break; case 6: self::soal6($range); break; case 7: self::soal7($range); break; case 8: self::soal8($range); break; default: die("Tidak ada soal $soal! \n"); break;
    	}
    	return self::$result;
    }

    private function soal1($range)
    {
    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($x==$y) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal2($range)
    {
    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($x==$range-($y-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal3($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($x==$y || $x==$range-($y-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal4($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($x==$y || $x==$range-($y-1)) {
    				self::$result .= "*";
    			} elseif ($x==round($range/2) || $y==round($range/2)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal5($range)
    {
    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($y <= $x) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal6($range)
    {
    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($x >= $range-($y-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal7($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($y <= $x && $x >= $range-($y-1)) {
    				self::$result .= "*";
    			} elseif ($y >= $x && $x <= $range-($y-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal8($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($x = 1; $x <= $range; $x++) {
    		for ($y = 1; $y <= $range; $y++) {
    			if ($y <= $x && $x <= $range-($y-1)) {
    				self::$result .= "*";
    			} elseif ($y >= $x && $x >= $range-($y-1)) {
    				self::$result .= "*";
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }
}
