<?php 

class Database {

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    }

    public function query($sql, $data = [])
	{
		$this->stmt = $this->dbh->prepare($sql);
		$this->stmt->execute($data);
		// return $this->stmt;
	}

	public function multipleSet()
	{
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function singleSet()
	{
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

    public function rowCont()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}