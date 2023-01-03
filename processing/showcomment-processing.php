<?php
    if(array_key_exists('id', $_GET)){
        $id = $_GET['id'];
        $sql = "SELECT * FROM comment WHERE quizId = \"$id\" ORDER BY commentDateTime DESC LIMIT 10 OFFSET 3;";
        $res = $conn->query($sql)->fetch_assoc();
        echo $res;
    }
?>