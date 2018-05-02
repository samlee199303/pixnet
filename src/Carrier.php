<?php
namespace Pixnet;

interface Carrier
{
	public function calculateFee($kilogram, $area);
}