<?php
    session_start();
    require_once "../database.php";
    $_SESSION['score'] = 0;
    $id = $_GET['quizID'];
    $sql = "SELECT COUNT(*) AS quest_num FROM quiz JOIN question ON quiz.id = question.quizId WHERE quiz.id = \"$id\"";
    $res = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    $_SESSION['quest_num'] = $res['quest_num'];
    $_SESSION['offset'] = 0;
    require_once "../processing/play-quiz-processing.php";
?>