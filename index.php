<?php

if (!isset($_GET['page']))
    include "App/Views/users/index.php";
else {
    $page = $_GET['page'];
    switch ($page) {
        case 'subjects':
            include "App/Views/subjects/subject.php";
            break;

        case 'imtihonlar':
            include "App/Views/exams/exam.php";
            break;

        case 'natija':
            include "App/Views/results/result.php";
            break;

        default:
            include "App/Views/users/index.php";
            break;
    }
}
// include "App/Views/subject/subjects.php";
