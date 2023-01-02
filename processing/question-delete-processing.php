<?php
    require_once "../quizApp/database.php";
    $id = $_GET['questionID'];
    $sql = "DELETE FROM question WHERE id = \"$id\"";
    $conn->query($sql);
?>