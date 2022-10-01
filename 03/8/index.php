<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>練習問題</title>
</head>
<body>
	<div class="container">
		<table border="1">
			<tr>
			<?php for($i = 0; $i < 10; $i++): ?>
				
				<th><?php echo $i ?></th>
			<?php endfor ?>
			
			</tr>
			<?php for($i = 1; $i<10; $i++): ?>
				<tr>
				<?php for($j = 0; $j<10; $j++): ?>
					<?php if($j == 0): ?>
						<th><?php echo $i ?></th>
					<?php else: ?>
						<td><?php echo $i*$j ?></td>
					<?php endif?>
				<?php endfor ?>
				</tr>
			<?php endfor ?>
		</table>
	</div>
</body>
</html>