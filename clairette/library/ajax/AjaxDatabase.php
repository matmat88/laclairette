<?php


class AjaxDatabase
{
	private $pdo;


	public function __construct()
	{

		$this->pdo = new PDO
		(
            'mysql:host=localhost;dbname=claiprag_clairette',
            'claiprag_root',
            'Taverne1*Taverne1*'
		);

		$this->pdo->exec('SET NAMES UTF8');
	}

	public function executeSql($sql, array $values = array())
	{
		$query = $this->pdo->prepare($sql);

		$query->execute($values);

		return $this->pdo->lastInsertId();
	}

    public function query($sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);

        $query->execute($criteria);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryOne($sql, array $criteria = array())
    {
        $query = $this->pdo->prepare($sql);

        $query->execute($criteria);

        return $query->fetch(PDO::FETCH_ASSOC);
    }
}