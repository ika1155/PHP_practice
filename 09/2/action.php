<?php
	session_start();
	session_regenerate_id();

	if(isset($_SESSION['error']))
	{
		unset($_SESSION['error']);
	}

	try
	{
		if(!isDate($_POST['date']))
		{
			throw new Exception('日付の形式が正しくありません');
		}
	}
	catch(Exception $e)
	{
		$_SESSION['error']['msg'] = $e->getMessage();
		$_SESSION['error']['date'] = $_POST['date'];
		header('Location:./');
		exit;
	}
	
	function isDate($str)
	{
		//explode(分割する文字、対象)
		$date = explode('/', $str);
		if (count($date) != 3)
		{
			return false;
		}

		for ($i=0; $i<count($date); $i++)
		{
			if (!is_numeric($date[$i]))
			{
				return false;
			}
		}
		
		// checkdate(月,日,年)
		return checkdate($date[1], $date[2], $date[0]);
	}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>練習問題</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	 	<div class="row my-3 justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header">
						判定結果
					</div>
					<div class="card-body">
						正しい日付です。
					</div>
				</div>
			</div>
		
		</div>
	</div>
</body>
</html>