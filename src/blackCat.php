<?php
namespace Pixnet;
/**
* 
*/
class BlackCat implements Carrier
{
	const basicFeeChina = 200;
	const perKgAddFeeChina = 20;
	const basicFeeTaiwan = 100;
	const perKgAddFeeTaiwan = 10;

	protected $kilogram;
	protected $area;

	public function calculateFee($kilogram, $area)
	{
		if ($area == 'China') {
			return self::basicFeeChina + $kilogram * self::perKgAddFeeChina;
		} elseif ($area == 'Taiwan') {
			return self::basicFeeTaiwan + $kilogram * self::perKgAddFeeTaiwan;
		}
	}
}