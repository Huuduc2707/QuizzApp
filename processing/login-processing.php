<?php
session_start();
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../database.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM user
    // where username='$username' and password='$password'";
    $sql = "SELECT * FROM login_info
    JOIN employee ON login_info.username = employee.First_name WHERE login_info.username = '$username' AND login_info.password = '$password'";
    $result = $conn->query($sql);
    $returnUserArray = $result->fetch_all(MYSQLI_ASSOC);
    if (count($returnUserArray) == 1) {
        $loginuser = $returnUserArray[0];
        $_SESSION['username'] = $username;
        $_SESSION['lv'] = $loginuser["userlevel"];
        $cookie_name = "user";
        $cookie_value = $username;
        setcookie($cookie_name, $cookie_value, time() + (3600), "/");
        $_SESSION['employeeID'] = $loginuser['ID'];
        $_SESSION['name'] = $loginuser['Last_name']." ".$loginuser['First_name'];
        $_SESSION['departID'] = $loginuser["Supermarket_Scode"];
        //$_SESSION['avatar'] = $loginuser['avatar'];
        if ($loginuser['Role'] != "Cashier")
            header('location: ../index.php?page=employee');
        else
            header('location: ../index.php?page=import');

        // mysqli_close($conn);
        // if ($_SESSION['level'] == 'admin'){
        //     header('location: ../index.php?page=user');
        // }
        // else{
        //     header('location: ../index.php?page=task');
        // }
    } else {
        $_SESSION['loginerror'] = "Incorrect username or password";
        header('location: ../login.php');
    };
}
