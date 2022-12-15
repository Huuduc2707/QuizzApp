<?php
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "./database.php";
    $emid = $_GET['emid'];
    $address = validate($_POST['address']);
    $phone = validate($_POST['phone']);
    $salary = validate($_POST['salary']);
    $departID = validate($_POST['departID']);
    $sql = "UPDATE employee SET Address = '$address' WHERE ID='$emid'";
    $conn->query($sql);
    $sql = "UPDATE employee SET Phone_number = '$phone' WHERE ID='$emid'";
    $conn->query($sql);
    $sql = "UPDATE employee SET Salary = '$salary' WHERE ID='$emid'";
    $conn->query($sql);
    $sql = "UPDATE employee SET Supermarket_Scode = '$departID' WHERE ID='$emid'";
    $conn->query($sql);
    header("location: ./index.php?page=profile&employeeID=$emid");
}
