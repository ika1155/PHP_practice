<?php

$num = $_POST['num'];

if ($num == 100)
{
	$str = '満点です！';
}
else if($num > 79)
{
	$str = '優秀です！';
}
else if($num > 69)
{
	$str = 'まずまずです。';
}
else if($num > 59)
{
	$str = '合格です。';
}
else
{
	$str = '残念でした。次回は頑張りましょう！';
}
echo $str;
?>