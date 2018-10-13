<?php
namespace App\Logic;

/**
 * summary
 */
class Logic
{
	protected static $result = '';

	public static function result(int $soal, int $range, $param1=null, $param2=null, $param3=null)
	{
		if (method_exists(get_called_class(), "soal".$soal)) {
    		// call soal ke $soal
    		call_user_func_array([get_called_class(), "soal".$soal], [$range,$param1,$param2,$param3]);
    	} else {
    		return 'Tidak ada soal '.$soal.'!';
    	}

    	return self::$result;
	}
}