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
    $name = validate($_POST['name']);
    $date = validate($_POST['date']);
    $cashier_id = validate($_POST['cashier_id']);
    $customer_id = validate($_POST['customer_id']);
    $saving_point_policy = validate($_POST['saving_point_policy']);

    $sql = "INSERT INTO export_bill (Date, Name, Cashier_ID, Customer_ID, Saving_point_policy_ID)
            VALUES ('$date', '$name', '$cashier_id', '$customer_id', '$saving_point_policy')";
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

    header("location: ./index.php?page=export");
}

?>
