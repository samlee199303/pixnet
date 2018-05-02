<?php
namespace Pixnet;
/**
* 
*/
class Ups implements Carrier
{
	const basicFee = 0;
	const perKgAddFee = 60;

	protected $kilogram;
	protected $area;

	public function calculateFee($kilogram, $area)
	{
		if ($area == 'America') {
			return self::basicFee + $kilogram * self::perKgAddFee;
		}
	}
}