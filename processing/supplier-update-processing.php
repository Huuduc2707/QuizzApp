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
    $email = validate($_POST['email']);
    $phone = validate($_POST['phone']);
    $location = validate($_POST['location']);
    $name = validate($_POST['name']);

    if($address){
        $sql = "UPDATE supplier SET Email_address = 'email' WHERE ID='$id'";
        $conn->query($sql);
    }
    
    if($phone){
        $sql = "UPDATE supplier SET Phone_number = '$phone' WHERE ID='$id'";
        $conn->query($sql);
    }
    
    if($location){
        $sql = "UPDATE supplier SET Location = '$location' WHERE ID='$id'";
        $conn->query($sql);
    }

    if($name){
        $sql = "UPDATE supplier SET Name = '$name' WHERE ID='$id'";
        $conn->query($sql);
    }
    header("location: ./index.php?page=supplier");
}
