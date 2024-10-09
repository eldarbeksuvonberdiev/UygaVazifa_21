<?php
namespace App\Database;
use PDO;

class Database{

    public static function connect(){

        return new PDO("mysql:host=localhost;dbname=imtihon",'root','root');
    }

}



?>