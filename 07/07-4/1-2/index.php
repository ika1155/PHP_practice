<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>07-4-1-2</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<?php

	require_once('./IComputer.php');
	require_once('./IMailer.php');
	require_once('./IPhone.php');
	require_once('./Computer.php');
	require_once('./Mailer.php');
	require_once('./Phone.php');

	$phone = new Phone();
	$mailer = new Mailer();
	$computer = new Computer();

	funcPhone($phone);
	funcMailer($mailer);
	funcComputer($computer);

	function funcPhone(IPhone $phone)
	{
		$phone->callPhone();
		$phone->receivePhone();
	}

	function funcMailer(IMailer $mailer)
	{
		$mailer->sendMail();
		$mailer->receiveMail();
	}

	function funcComputer(IComputer $computer)
	{
		$computer->playGame();
		$computer->browseWeb();
	}

	?>
		
	</div>
</body>
</html>