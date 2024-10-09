<?php
include "App/Models/Subject.php";

use App\Models\Subject;

$fanlar = Subject::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: grey;">
    <h1>Fanlar</h1>
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
    <a href=""><button style="margin-left: 50px;background-color: green;border-radius: 5px;width: 100px;height:30px">Add new</button></a>

    <table style="width: 100vh;margin-left: 300px;background-color:antiquewhite" border="2">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Option</th>
        </tr>
        <?php
        foreach ($fanlar as $fan) { ?>

            <tr>
                <td><?= $fan->id ?></td>
                <td><?= $fan->name ?></td>
                <td>
                    <a href="?edit_id=<?= $fan->id ?>" style="color: white;text-decoration:none"><button style="background-color: blue;border-radius:5px;width:70px;height:30px;margin-left:30px">Edit</button></a>
                    <a href="?del_id=<?= $fan->id ?>" style="color: white;text-decoration:none"><button style="background-color: red;border-radius:5px;width:70px;height:30px;margin-left:30px">Delete</button></a>
                </td>
            </tr>
        <?php }
        if (isset($_GET['del_id'])) {
            $id = $_GET['del_id'];
            Subject::delete($id);
        }
        ?>
    </table>
</body>