<?php
namespace Pixnet;
/**
* 
*/
class Calculate
{
	public function calculateFee(Carrier $carrier, $kilogram, $area)
	{
		return $carrier->calculateFee($kilogram, $area);
	}
}