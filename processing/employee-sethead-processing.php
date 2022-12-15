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
    $departID = $_GET['depart'];
    $sql = "SELECT * FROM employee
    LEFT JOIN login_info ON employee.First_name = login_info.username 
    WHERE employee.role = 'Manager' AND employee.Supermarket_Scode = '$departID'";
    $oldhead = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0]['First_name'];
    $sql = "UPDATE login_info SET userlevel = 10 WHERE username = '$oldhead'";
    $conn->query($sql);
    $sql = "UPDATE login_info SET userlevel = 100 WHERE username = '$username'";
    $conn->query($sql);
    $sql = "UPDATE employee SET Role = 'Cashier' WHERE First_name = '$oldhead'";
    $conn->query($sql);
    $sql = "UPDATE employee SET Role = 'Manager' WHERE First_name = '$username'";
    $conn->query($sql);
    header("location: ./index.php?page=employee");
}
