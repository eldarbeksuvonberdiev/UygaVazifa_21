<?php

namespace App\Models;

include "App/Database/Database.php";

use App\Database\Database;
use PDO;

class Model extends Database
{
    protected static $table;

    public static function all()
    {
        $db = self::connect();
        $stmt = $db->query('SELECT * FROM ' . static::$table);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getOne($id)
    {
        $db = self::connect();
        $stmt = $db->query('SELECT * FROM ' . static::$table . " WHERE id={$id}");
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public static function delete($id){
        $db = self::connect();
        $stmt = $db->exec("DELETE FROM ". static::$table . " WHERE id={$id}");
    }
}
