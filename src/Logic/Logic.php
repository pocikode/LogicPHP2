<?php
namespace App\Logic;

/**
 * summary
 */
abstract class Logic
{
	protected static $result = '';

	abstract public static function result(int $soal, int $range);
}