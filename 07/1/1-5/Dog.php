<?php

class Dog{
	private $name;
	private $age;
	private $type;

	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function showProfile()
	{
		echo '<p>名前は'.$this->name.'です。
		年齢は'.$this->age.'歳です。
		犬種は'.$this->type.'です。</p>';
	}

}

?>