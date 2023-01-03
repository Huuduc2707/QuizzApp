<?php
    session_start();
    require_once "../database.php";
    $id = $_GET['quizID'];
    $offset = $_SESSION['offset'];
    $sql = "SELECT question.content, question.point, question.timeLimit, question.media, option.content, option.isAnswer
            FROM quiz JOIN question ON quiz.id = question.quizId JOIN option ON question.id = option.questionId
            WHERE quiz.id = \"$id\"
            LIMIT 4 OFFSET \"$offset\"";
    $question = $conn->query($sql);
    if(mysqli_num_rows($question)){
        $res = $question->fetch_all(MYSQLI_ASSOC);
        $_SESSION['offset']+=4;
        echo json_encode($res);
    }
    else echo 0;
?>