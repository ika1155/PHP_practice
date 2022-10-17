<?php

abstract class Computer
{
	protected $type;

	public function __construct($type)
	{
		$this->type = $type;
	}

	public function showType()
	{
		echo $this->type;
	}

	abstract public function input();

	abstract public function output();

	public function communication()
    {
        echo '<p>インターネットで通信</p>';
    }
}

?>