<?php
namespace Pixnet;
/**
* 
*/
class Hct implements Carrier
{
	const basicFee = 80;
	const perKgAddFee = 15;

	protected $kilogram;
	protected $area;

	public function calculateFee($kilogram, $area)
	{
		if ($area == 'Taiwan') {
			return self::basicFee + $kilogram * self::perKgAddFee;
		}
	}
}