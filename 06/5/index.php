<?php 
session_start();
session_regenerate_id();

$products =[
	0 => [
		'product_name' => 'みかん',
		'price' => 300
	],
	1 => [
		'product_name' => 'りんご',
		'price' => 500
	],
	2 => [
		'product_name' => 'バナナ',
		'price' => 150
	]
];

?>	
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>06-5</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row my-5 justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					注文画面
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<th>商品名</th>
							<th>価格</th>
							<th>注文数</th>
							<th></th>
						</thead>
						<tbody>
							<?php foreach($products as $product): ?>
								<form method="POST" action="./cart_add.php">
									<tr>
										<td>
											<?= $product['product_name'] ?>
											<input type="hidden" name="product_name" value="<?= $product['product_name'] ?>">
										</td>
										<td>
											<?= $product['price'] ?>
											<input type="hidden" name="price" value="<?= $product['price'] ?>">
										</td>
										<td>
											<input type="text" name="num" class="form-control">
										</td>
										<td>
											<input type="submit" value="カートに入れる" class="btn btn-primary">
										</td>
									</tr>
								</form>
							<?php endforeach ?>
						</tbody>
					</table>
					<a href="./cart_show.php">カートを見る</a>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>