<?php

namespace App\Models;

use App\Db;

abstract class Model
{
    public const TABLE = '';
    public $id;

    public static function findAll()
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::TABLE;

        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db();

        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = $db->query($sql, [':id' => $id], static::class);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    public function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ($name == 'id') {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' .  static::TABLE . ' (' . implode(', ', $cols) . ') VALUES (' . implode(', ', array_keys($data)) . ')';

        $db = new Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastId();
    }
}