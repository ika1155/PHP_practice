<?php
session_start();
session_regenerate_id();

if (empty($_SESSION['user']))
{
	header('Location:./login.php');
	exit;
}

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try
{
	$db = new TodoItems();
	$lists = $db->selectAll();
}
catch(Exception $e)
{
	var_dump($e);
	exit;
}

$fp = fopen('./work.csv', 'w');
$b = true;

foreach($lists as $list)
{
	foreach($list as $key => $value)
	{
		if ($key == 'todo_item')
		{
			$list[$key] = mb_convert_encoding($value, 'SJIS-win', 'UTF-8');
		}
	}
	// === 値と型が完全に一致しているかどうか
	if (fputcsv($fp, $list, ',', '"') === false )
	{
		$b = false;
		break;
	}
}

if ($b)
{
	$msg = '書き込みが完了しました。';
}
else
{
	$msg = '書き込みに失敗しました。';
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>12-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row my-3 justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<p><?= $msg ?></p>
						<a href="./">戻る</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>