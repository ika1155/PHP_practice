<?php

class Users extends Base
{
	public function __construct()
	{
		parent::__construct();	
	}

	public function addUser(string $email, string $password, string $name)
	{
		if (!empty($this->findUserByEmail($email)))
		{
			return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$sql = 'INSERT INTO users(email, password, name) 
				VALUES (:email, :password, :name)';
		
		$stmt = $this->dbh->prepare($sql);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->bindValue(':password', $password, pdo::PARAM_STR);
		$stmt->bindValue(':name', $name, pdo::PARAM_STR);

		$stmt->execute();
		
		return true;
	}

	//　メールアドレスが一致するユーザーがいればtrueを返す
	public function findUserByEmail(string $email)
	{
		$sql = 'SELECT * FROM users WHERE email=:email';

		$stmt = $this->dbh->prepare($sql);
		$stmt->bindValue(':email', $email, PDO::PARAM_STR);
		$stmt->execute();
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		if (empty($rec))
		{
			return [];
		}
		return $rec;
	}

	// メールアドレスとパスワードが一致するか
	public function getUser(string $email, string $password)
	{
		$rec = $this->findUserByEmail($email);
		if (empty($rec))
		{
			return [];
		}

		if (password_verify($password, $rec['password']))
		{
			return $rec;
		}

		return [];
	}
}

?>