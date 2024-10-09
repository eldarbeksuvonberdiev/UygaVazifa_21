<?php

namespace App\Models;

use PDO;

require_once "Model.php";

class Exam extends Model
{
    public static $table = "imtihonlar";

    public static function getExam($user_id,$s_id) : bool {
        $db = self::connect();
        $stmt = $db->query("SELECT * FROM " . static::$table . " WHERE user_id='{$user_id}' AND fan_id = '{$s_id}'")->fetch(PDO::FETCH_OBJ);
        if($stmt)
            return true;
        return false;
        }

    public static function addExam($user_id,$s_id,$ball){
        $db = self::connect();
        $db->exec("INSERT INTO ". static::$table."(user_id,fan_id,ball) VALUES('{$user_id}','{$s_id}','{$ball}')");
    }
}
