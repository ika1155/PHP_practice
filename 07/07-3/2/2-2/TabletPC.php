<?php

class TabletPC extends Computer
{
	public function __construct()
	{
		parent::__construct('<p>タブレットPC</p>');
	}

	public function input()
	{
		echo '<p>タッチパネルディスプレイをタップして操作</p>';
	}

	public function output()
	{
		echo '<p>タッチパネルディスプレイに出力</p>';
	}
}

?>