<?php

class CoinCase{

	private $coins = [
		500 => 0,
		100 => 0,
		50 => 0,
		10 => 0,
		5 => 0,
		1 => 0
	];

	public function addCoins($type, $num)
	{
		if(!isset($this->coins[$type]))
		{
			return;
		}
		else
		{
			$this->coins[$type] += $num;
		}
	}

	public function getCount($type)
	{
		if(!isset($this->coins[$type]))
		{
			return;
		}
		else
		{
			return $this->coins[$type];
		}
	}

	public function getAmount()
	{
		$amount = 0;
		foreach($this->coins as $key => $value)
		{
			$amount += $key * $value;
		}
		return $amount;
	}
}

?>