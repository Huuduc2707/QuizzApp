<?php
    if(array_key_exists('id', $_GET)){
        $id = $_GET['id'];
        $sql = "SELECT * FROM quiz WHERE id = \"$id\";";
        $res = $conn->query($sql)->fetch_assoc();
        echo $res;
    }
?>