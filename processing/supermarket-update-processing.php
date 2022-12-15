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
    $id = $_GET['id'];
    $name = validate($_POST['name']);
    $location = validate($_POST['location']);
    $number_of_employees = validate($_POST['number_of_employees']);
    
    if($name){
        $sql = "UPDATE supermarket SET Name = '$name' WHERE SCode='$id'";
        $conn->query($sql);
    }
    
    if($location){
        $sql = "UPDATE supermarket SET Location = '$location' WHERE SCode='$id'";
        $conn->query($sql);
    }

    if($number_of_employees){
        $sql = "UPDATE supermarket SET Number_of_employees = '$number_of_employees' WHERE SCode='$id'";
        $conn->query($sql);
    }
    header("location: ./index.php?page=supermarket");
}
