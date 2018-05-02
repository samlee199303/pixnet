<?php 
/**
* 
*/
class Fee
{
	public function calculate($carrier, $kilogram, $area)
	{
		$resultFee = 0;

		switch ($area) {
			case 'America':
				if ($carrier == 'UPS') { // UPS
					$resultFee += $kilogram*60;
				}
				break;
			
			case 'China':
				if ($carrier == 'blackCat') { // 黑貓
					$resultFee += 200 +$kilogram*20;
				} elseif ($carrier == 'SF') { // 順風
					$resultFee += 150 +$kilogram*30;
				}
				break;
			
			case 'Taiwan':
				if ($carrier == 'blackCat') { // 黑貓
					$resultFee += 100 +$kilogram*10;
				} elseif ($carrier == 'HCT') { // 新竹貨運
					$resultFee += 80 +$kilogram*15;
				} elseif ($carrier == 'POST') { // 郵局
					$resultFee += 60 +$kilogram*20;
				}
				break;
			
			default:
				# code...
				break;
		}
		return $resultFee;
	}
}