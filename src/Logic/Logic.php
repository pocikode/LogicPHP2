<?php
namespace App\Logic;

/**
 * summary
 */
class Logic
{
	protected static $result = [];

	public static function result(int $soal, int $range, $array2D=true, $param2=null, $param3=null)
	{
		if (method_exists(get_called_class(), "soal".$soal)) {
    		// call soal ke $soal
    		call_user_func_array([get_called_class(), "soal".$soal], [$range,$array2D,$param2,$param3]);
    	} else {
    		return 'Tidak ada soal '.$soal.'!';
    	}

    	self::printArray(self::$result, $array2D);
	}

	protected static function printArray($array, $array2D)
	{
		if ($array2D) {
			for ($i = 0; $i < count($array); $i++) {
				for ($j = 0; $j < count($array[0]); $j++) {
					echo $array[$i][$j];
				}
				echo "\n";
			}
		} else {
			for ($i = 0; $i < count($array); $i++) {
				echo $array[$i].', ';
			}
		}
	}
}