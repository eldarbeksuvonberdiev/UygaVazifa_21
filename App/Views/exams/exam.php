<?php

use App\Models\Subject;
use App\Models\User;

session_start();
include "App/Models/User.php";
// include "App/Models/Subject.php";

$talabalar = User::all();
// $fanlar = Subject::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: grey;">
    <h1>Imtihon</h1>
    <ul>
        <li>
            <a href="?page=index">Talabalar</a>
        </li>
        <li>
            <a href="?page=subjects">Fanlar</a>
        </li>
        <li>
            <a href="?page=imtihonlar">Imtihonlar</a>
        </li>
        <li>
            <a href="?page=natija">Natija</a>
        </li>
    </ul>
    <form action="save.php" method="POST">
        <label for="talaba" style="margin-right: 30px;">Talaba</label>
        <select name="talaba" id="talaba" style="width: 50vh;">
            <?php
            foreach ($talabalar as $talaba) { ?>
                <option value="<?= $talaba->id ?>"><?= $talaba->name?></option>
            <?php }
            ?>
        </select><br><br>
        <label for="talaba" style="margin-right: 30px;">Fanlar</label>
        <select name="fan" id="talaba" style="width: 50vh;">
            <?php
            foreach ($fanlar as $fan) { ?>
                <option value="<?= $fan->id ?>"><?= $fan->name ?></option>
            <?php }
            ?>
        </select><br><br>
        <label for="talaba" style="margin-right: 30px;">Ball</label>
        <input type="number" name="ball" min="0" max="100" placeholder="Max 100" style="width: 50vh;"><br><br>

        <a href="save.php" type="submit"><button style="background-color: blue;border-radius:5px;width:100vh;height:30px;" name="ok">Saqlash</button></a>
    </form>
    <?php
    if (isset($_SESSION['err']))
        echo $_SESSION['err'];
    unset($_SESSION['err']);
    ?>
</body>

</html>