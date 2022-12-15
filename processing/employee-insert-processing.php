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
    // $deid = $_SESSION['departID'];
    // echo $deid;
    // echo "<br>";


    // $sql = "SELECT * FROM request 
    // INNER JOIN employee ON request.officerID = employee.employeeID
    // LEFT JOIN request_absence ON request.requestID = request_absence.absenceID
    // LEFT JOIN request_salary ON request.requestID = request_salary.salaryID";
    // $requestArray = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($requestArray);
    // echo "</pre>";
    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $username = validate($_POST['username']);
    $role = validate($_POST['role']);
    $departID = validate($_POST['departID']);
    $password = validate($_POST['password']);
    $gender = validate($_POST['gender']);
    $dob = validate($_POST['dob']);
    $address = validate($_POST['address']);
    $phone = validate($_POST['phone']);
    $salary = validate($_POST['salary']);

    if ($role == 'Manager'){
        $sql = "SELECT * FROM employee WHERE employee.Supermarket_Scode = '$departID' AND employee.Role = 'Manager'";
        $oldhead = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0]['First_name'];
        $sql = "UPDATE login_info SET userlevel = 10 WHERE username = '$oldhead'";
        $conn->query($sql);
        $sql = "UPDATE employee SET Role = 'Cashier' WHERE First_name = '$oldhead'";
        $conn->query($sql);
        $sql = "UPDATE employee SET Role = 'Manager' WHERE First_name = '$firstName'";
        $conn->query($sql);
    }
    $lv = 0;
    if($role == 'Manager') $lv=100; else $lv=10;
    $sql = "INSERT INTO login_info (username, password, userlevel)
            VALUES ('$username', '$password', '$lv')";
    $conn->query($sql);
    $sql = "INSERT INTO employee (Phone_number, Address, First_name, Last_name, Start_date, Salary, Role, Gender, Date_of_birth, Supermarket_Scode)
            VALUES ('$phone', '$address', '$firstName', '$lastName', '2022-12-16', '$salary', '$role', '$gender', '$dob', '$departID')";
    $conn->query($sql);
    // if ($_POST['gender'] != "") {
    //     $gender = validate($_POST['gender']);
    //     $sql = "UPDATE employee SET gender = '$gender' WHERE username='$username'";
    //     $conn->query($sql);
    // }
    // if ($_POST['dob'] != "") {
    //     $dob = validate($_POST['dob']);
    //     $sql = "UPDATE employee SET dob = '$dob' WHERE username='$username'";
    //     $conn->query($sql);
    // }
    
    // if ($_POST['address'] != "") {
    //     $address = validate($_POST['address']);
    //     $sql = "UPDATE employee SET address = '$address' WHERE username='$username'";
    //     $conn->query($sql);
    // }
    // if ($_POST['phone'] != "") {
    //     $phone = validate($_POST['phone']);
    //     $sql = "UPDATE employee SET phone = '$phone' WHERE username='$username'";
    //     $conn->query($sql);
    // }
    // if ($_POST['salary'] != "") {
    //     $salary = validate($_POST['salary']);
    //     $sql = "UPDATE employee SET salary = '$salary' WHERE username='$username'";
    //     $conn->query($sql);
    // }



    
    header("location: ./index.php?page=employee");
}

?>
