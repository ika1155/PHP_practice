<?php
require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try
{
	$db = new TodoItems();

	$lists = $db->selectAll();
}
catch (Exception $e)
{
	var_dump($e);
	exit;
}

header('Content-Type:text/csv');
header('Content-Disposition:attachment; filename="work.csv"');

foreach ($lists as $list)
{
	foreach ($list as $key => $value)
	{
		if ($key == 'todo_item')
		{
			$list[$key] = mb_convert_encoding($value, 'SJIS-win', 'UTF-8');
		}
	}
	echo implode(',', $list)."\n";
}
?>