<?php
namespace Pixnet;
/**
* 
*/
class Sf implements Carrier
{
	const basicFee = 150;
	const perKgAddFee = 30;

	protected $kilogram;
	protected $area;

	public function calculateFee($kilogram, $area)
	{
		if ($area == 'China') {
			return self::basicFee + $kilogram * self::perKgAddFee;
		}
	}
}