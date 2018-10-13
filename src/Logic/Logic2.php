<?php
namespace App\Logic;

/**
 * summary
 */
class Logic2 extends Logic
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
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			$number = ($y*2)-1;
    			if ($y==$x) {
    				self::$result .= $number;
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal2($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$range-($x-1)) {
    				$number = ($x*2)-2;
    				self::$result .= $number;
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal3($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$x) {
    				$number = ($y*2)-1;
    				self::$result .= $number;
    			} elseif ($y==$range-($x-1)) {
    				$number = ($x*2)-2;
    				self::$result .= $number;
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }

    private function soal4($range)
    {
    	for ($y = 1; $y <= $range; $y++) {
    		for ($x = 1; $x <= $range; $x++) {
    			if ($y==$x) {
    				$number = ($y*2)-1;
    				self::$result .= $number;
    			} elseif ($y==$range-($x-1)) {
    				$number = ($x*2)-2;
    				self::$result .= $number;
    			} else {
    				self::$result .= "-";
    			}
    		}
    		self::$result .= "\n";
    	}
    }
}