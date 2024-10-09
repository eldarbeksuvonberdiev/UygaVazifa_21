<?php

include "App/Models/User.php";

use App\Models\User;

$users = User::all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: grey;">
    <h1>Talabalar</h1>
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
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td>
                    <a href=""><button style="background-color: yellow;">Edit</button></a>
                    <a href=""><button style="background-color: red;">Delete</button></a>
                </td>
            </tr>
        <?php }
        // if(isset($_GET['page'])){
        //     $page = $_GET['page'];
        //     switch ($page) {
        //         case 'subjects':
        //             header("location:App/Views/subject/subjects.php");
        //             break;
        //         case 'imtihonlar':
        //             header("location:App/Views/imtihon/imtihonlar.php");
        //             break;
        //         case 'natija':
        //             header("location:App/Views/natijalar/natija.php");
        //             break;
        //         default:
        //             header("location:index.php");    
        //             break;
        //     }
        // }

        ?>
    </table>
</body>

</html>