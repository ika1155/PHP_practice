<?php

class PersonalComputer extends Computer
{
	public function __construct()
	{
		parent::__construct('<p>パーソナルコンピューター</p>');
	}

	public function input()
	{
		echo '<p>キーボード・マウスで入力</p>';
	}

	public function output()
	{
		echo '<p>ディスプレイに出力</p>';
	}
}

?>