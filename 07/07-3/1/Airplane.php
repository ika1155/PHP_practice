<?php

abstract class Airplane
{
	private $type;

	Public function __construct($type)
	{
		$this->type = $type;
	}

	public function showType()
	{
		echo '<p>'.$this->type.'</p>';
	}
	
	abstract public function fly();
}

?>