<?php
namespace App\Logic;

/**
 * summary
 */
class Logic2 extends Logic
{
    protected function soal1($range)
    {
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			$number = ($i*2)+1;
    			if ($i==$j) {
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal2($range)
    {
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($j==$range-$i-1) {
    				$number = ($j*2);
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal3($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($i==$j) {
    				$number = ($i*2)+1;
    				self::$result[$i][$j] = $number;
    			} elseif ($i==$range-$j-1) {
    				$number = ($j*2);
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal4($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;
    	
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($i==$j || $j==floor($range/2)) {
    				$number = ($i*2)+1;
    				self::$result[$i][$j] = $number;
    			} elseif ($i==$range-$j-1 || $i==floor($range/2)) {
    				$number = ($j*2);
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal5($range)
    {
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($j <= $i) {
    				$number = ($j*2)+1;
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal6($range)
    {
    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($j >= $range-$i-1) {
    				$number = ($range-1)*2 - ($i*2);
    				self::$result[$i][$j] = $number;
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal7($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($i==$j) {
    				$number = $j*2+1;
    				self::$result[$i][$j] = $number;
    			} elseif ($j==$range-$i-1) {
    				$number = ($j*2);
    				self::$result[$i][$j] = $number;
    			} elseif ($j >= $i && $j <= $range-$i-1) {
    				self::$result[$i][$j] = "A";
    			} elseif ($j <= $i && $j >= $range-$i-1) {
    				self::$result[$i][$j] = "B";
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }

    protected function soal8($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	for ($i = 0; $i < $range; $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($i==$j) {
    				$number = $j*2+1;
    				self::$result[$i][$j] = $number;
    			} elseif ($j==$range-$i-1) {
    				$number = ($j*2);
    				self::$result[$i][$j] = $number;
    			} elseif ($j <= $i && $j <= $range-$i-1) {
    				self::$result[$i][$j] = "A";
    			} elseif ($j >= $i && $j >= $range-$i-1) {
    				self::$result[$i][$j] = "B";
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    		}
    	}
    }
}