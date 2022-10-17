<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-3-1</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php 
		require_once('./Airplane.php');
		require_once('./FighterAircraft.php');
		require_once('./PassengerPlane.php');

		$fighter = new FighterAircraft('戦闘機');
		$fighter->showType();
		$fighter->fly();
		$fighter->fight();

		$plane = new PassengerPlane('旅客機');
		$plane->showType();
		$plane->fly();
		$plane->carryPassengers();

	?>
		
	</div>
</body>
</html>