<?php

class TodoItems extends Base
{
	public function __construct()
	{
		parent::__construct();		
	}

	public function selectAll()
	{
		$sql = 'SELECT * FROM todo_items ORDER BY expiration_date';

		$stmt = $this->dbh->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function add(string $expirationDate, string $todoItem)
	{
		$date = htmlspecialchars($expirationDate);
		$item = htmlspecialchars($todoItem);

		$sql = 'INSERT INTO todo_items(expiration_date, todo_item)
				VALUES (:expiration_date,:todo_item)';
		
		$stmt = $this->dbh->prepare($sql);

		$stmt->bindValue(':expiration_date', $date, PDO::PARAM_STR);
		$stmt->bindValue(':todo_item', $item, PDO::PARAM_STR);

		$stmt->execute();
	}

	public function update(int $id, string $expirationDate, string $todoItem, int $isCompleted)
	{
		$id = htmlspecialchars($id);
		$date =htmlentities($expirationDate);
		$item = htmlspecialchars($todoItem);
		$comp = htmlspecialchars($isCompleted);

		$sql = 'UPDATE todo_items 
				SET expiration_date=:expiration_date, todo_item=:todo_item, is_completed=:is_completed 
				WHERE id=:id';

        $stmt = $this->dbh->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->bindValue(':expiration_date', $date, PDO::PARAM_STR);
        $stmt->bindValue(':todo_item', $item, PDO::PARAM_STR);
        $stmt->bindValue(':is_completed', $comp, PDO::PARAM_INT);

        $stmt->execute();
	}

	public function updateIsCompleted(int $id, int $isCompleted)
	{
		$id = htmlspecialchars($id);
		$comp = htmlspecialchars($isCompleted);

		$sql = 'UPDATE todo_items 
				SET is_completed=:isCompleted
				WHERE id=:id';

		$stmt = $this->dbh->prepare($sql);

		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->bindValue(':isCompleted', $comp, PDO::PARAM_INT);

		$stmt->execute();
	}

	public function delete(int $id)
	{
		$id= htmlspecialchars($id);
		
		$sql = 'DELETE FROM todo_items 
				WHERE id=:id';
		
		$stmt = $this->dbh->prepare($sql);
		
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);

		$stmt->execute();
	}
}

?>