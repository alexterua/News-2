<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = (include __DIR__ . '/../config.php')['db'];
        $opt = (include __DIR__ . '/../config.php')['pdo'];
        $this->dbh = new \PDO(
            $config['dsn'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=' . $config['charset'],
            $config['user'],
            $config['password']
        );
    }

    public function execute($query, $params = [])
    {
        $sth = $this->dbh->prepare($query);
        $sth->execute($params);
    }

    public function query($sql, $data, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }

}