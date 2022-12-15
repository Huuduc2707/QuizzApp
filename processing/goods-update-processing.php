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
    $brand = validate($_POST['brand']);
    $name = validate($_POST['name']);
    $price = validate($_POST['price']);
    $type = validate($_POST['type']);
    $description = validate($_POST['description']);

    if($brand){
        $sql = "UPDATE goods SET Brand = '$brand' WHERE ID='$id'";
        $conn->query($sql);
    }
    
    if($name){
        $sql = "UPDATE goods SET Name = '$name' WHERE ID='$id'";
        $conn->query($sql);
    }
    
    if($price){
        $sql = "UPDATE goods SET Price = '$price' WHERE ID='$id'";
        $conn->query($sql);
    }

    if($type){
        $sql = "UPDATE goods SET Type = '$type' WHERE ID='$id'";
        $conn->query($sql);
    }

    if($description){
        $sql = "UPDATE goods SET Description = '$description' WHERE ID='$id'";
        $conn->query($sql);
    }

    header("location: ./index.php?page=goods");
}
