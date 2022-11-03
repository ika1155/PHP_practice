<?php
// http://www.php-ref.com/web/03_move_uploaded_file.html
// tmp_name テンポラリファイル名　アップロードされたファイルの一時的なパス
$fp = fopen($_FILES['text_file']['tmp_name'], 'r');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>11-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
	while (($line = fgets($fp)) !== false)
	{
		echo '<p>'.$line.'</p>';
	}
	?>	
	</div>
</body>
</html>