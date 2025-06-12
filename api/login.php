<?php
session_start();
require("../includes/database_connect.php");

$login_id= $_POST['username'];
$password = $_POST['password'];
$password = sha1($password);

$sql="SELECT * FROM users WHERE (email='$login_id' OR phone_number='$login_id') AND password='$password'";$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    echo json_encode($response);
    return;
}

$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
    echo json_encode($response);
    return;
} 

$row = mysqli_fetch_assoc($result);
$_SESSION['user_id'] = $row['id'];
$_SESSION['fullname'] = $row['fullname'];
$_SESSION['email'] = $row['email'];

$response = array("success" => true, "message" => "Login successful!");
echo json_encode($response);
mysqli_close($conn);


