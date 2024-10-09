<?php

namespace App\Models;

include "App/Database/Database.php";

use App\Database\Database;
use PDO;

class Model extends Database{
    protected static $table;
    public static function all(){
        $db = self::connect();
        $stmt = $db->query('SELECT * FROM '.static::$table);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }
}

?>