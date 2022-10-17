<?php

class Phone implements IPhone
{
	public function callPhone()
	{
		echo '<p>電話をかける</p>';
	}
	public function receivePhone()
	{
		echo '<p>電話を受ける</p>';
	}
}

?>