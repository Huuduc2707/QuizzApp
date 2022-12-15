<?php
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once "./database.php";
    $id = $_GET['id'];
    $sql="DELETE FROM goods WHERE ID ='$id'";
    $conn->query($sql);
    header("location: ./index.php?page=goods");
}
