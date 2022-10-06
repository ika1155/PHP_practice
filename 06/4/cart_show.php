<?php 
session_start();
session_regenerate_id();

$total = 0;

?>	
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>06-4</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-5 justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					カートの確認
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>商品名</th>
							<th>価格</th>
							<th>注文数</th>
							<th>小計</th>
							<th></th>
						</thead>
						<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 ): ?>
						<tbody>							
							<?php 
							foreach($_SESSION['cart'] as $key => $value): ?>
							<form method="POST" action="cart_del.php">
								<tr>
									<td>
										<?= $value['product_name'] ?>
									</td>
									<td>
										<?= $value['price'] ?>
									</td>
									<td>
										<?= $value['num'] ?>
									</td>
									<td>
										<?php
										$sum = $value['price'] * $value['num'];
										$total += $sum;
										echo $sum.'円';
										?>
									</td>
									<td>
										<input type="submit" value="削除" class="btn btn-primary">
									</td>
								</tr>
							</form>	
							<?php endforeach ?>
						</tbody>
						<?php endif ?>		
					</table>
					<p>合計金額：<?= $total ?>円</p>
					<p><a href="./cart_del_all.php">カートを空にする</a></p>
					<p><a href="./">戻る</a></p>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>