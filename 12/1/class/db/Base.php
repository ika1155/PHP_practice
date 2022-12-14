<?php

Class Base 
{
	const DB_NAME = 'php_work';
	const DB_HOST = 'localhost';
	const DB_USER = 'root';
	const DB_PASS = '';
	protected $dbh;

	public function __construct()
	{
		$dsn = 'mysql:dbname='.self::DB_NAME.';host='.self::DB_HOST.';charset=utf8';

		$this->dbh = new PDO($dsn, self::DB_USER, self::DB_PASS);
		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
}

?>