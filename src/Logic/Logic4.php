<?php
namespace App\Logic;

class Logic4 extends Logic
{
	protected function ganjil($bil)
	{
		return $bil*2-1;
	}

    protected function soal1($range)
    {
    	for ($i = 0; $i < ceil($range/2); $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			// nilai tengah sumbu x
    			$tengah = floor($range/2);

    			if ($j >= $tengah-$i && $j <= $tengah+$i) {
    				self::$result[$i][$j] = $j-($tengah-$i-1);
    			} else {
    				self::$result[$i][$j] = ' ';
    			}
    		}
    	}
    }

    protected function soal2($range)
    {
    	for ($i = 0; $i < ceil($range/2); $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($j >= $i && $j <= $range-$i-1) {
    				self::$result[$i][$j] = $j-$i+1;
    			} else {
    				self::$result[$i][$j] = ' ';
    			}
    		}
    	}
    }

    protected function soal3($range)
    {
    	$range = ($range%2 == 0) ? $range+=1 : $range;

    	$ni=0; // indeks i

    	for ($i = -floor($range/2); $i <= floor($range/2); $i++) {
    		for ($j = 0; $j < $range; $j++) {
    			if ($j >= abs($i) && $j <= $range-abs($i)-1) {
    				self::$result[$ni][$j] = $j-abs($i)+1;
    			} else {
    				self::$result[$ni][$j] = ' ';
    			}
    		}
    		$ni++;
    	}
    }

    protected function soal4($range)
    {
    	$nj = 0; //indeks j

    	for ($i = 0; $i < $range; $i++) {
    		for ($j = -($range-1); $j <= ($range-1); $j++) {
    			if (abs($j) <= $i) {
    				$nilai = $i-abs($j)+1;
    				self::$result[$i][$nj] = self::ganjil($nilai);
    			} else {
    				self::$result[$i][$nj] = " ";
    			}
    			$nj++; // $nj ditambah 1 setiap ganti baris
    		}

    		$nj = 0; // $nj di ubah ke 0 lagi setiap ganti kolom
    	}
    }

    protected function soal5($range)
    {
    	$nj = 0; //indeks j

    	for ($i = 0; $i < $range; $i++) {
    		for ($j = -($range-1); $j <= ($range-1); $j++) {
    			if (abs($j) <= $range-$i-1) {
    				$nilai = $range-abs($j)-$i;
    				self::$result[$i][$nj] = self::ganjil($nilai);
    			} else {
    				self::$result[$i][$nj] = " ";
    			}
    			$nj++; // $nj ditambah 1 setiap ganti baris
    		}

    		$nj = 0; // $nj di ubah ke 0 lagi setiap ganti kolom
    	}
    }

    protected function soal6($range)
    {
    	$i=0;//indeks ke-i
    	$j=0;//indeks ke-j

    	$range = floor($range/2);

    	for ($y = -$range; $y <= $range; $y++) {
    		for ($x = -$range; $x <= $range; $x++) {
    			if (abs($x) <= $range-abs($y)) {
    				$nilai = $range-abs($x)-abs($y)+1;
    				self::$result[$i][$j] = self::ganjil($nilai);
    			} else {
    				self::$result[$i][$j] = " ";
    			}
    			$j++;
    		}
    		$j=0;
    		$i++;
    	}
    }
}