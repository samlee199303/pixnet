<?php
namespace Pixnet;
/**
* 
*/
class Post implements Carrier
{
	const basicFee = 60;
	const perKgAddFee = 20;

	protected $kilogram;
	protected $area;

	public function calculateFee($kilogram, $area)
	{
		if ($area == 'Taiwan') {
			return self::basicFee + $kilogram * self::perKgAddFee;
		}
	}
}