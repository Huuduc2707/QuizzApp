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
    $username = $_GET['username'];
    $sql="DELETE FROM login_info WHERE username='$username'";
    $conn->query($sql);
    $sql="DELETE FROM employee WHERE First_name ='$username'";
    $conn->query($sql);
    header("location: ./index.php?page=employee");
}
