<?php
header('Content-Type: application/json');
session_start();
require("../includes/database_connect.php");

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["success" => false, "is_logged_in" => false]);
    exit;
}

$user_id = $_SESSION['user_id'];
$property_id = $_GET['property_id'] ?? null;

if (empty($property_id) || !is_numeric($property_id)) {
    echo json_encode(['success' => false, 'message' => 'Invalid property_id']);
    exit;
}

// Check if already interested
$sql_1 = "SELECT * FROM intrested_users_properties WHERE user_id=$user_id AND property_id=$property_id";
$result_1 = mysqli_query($conn, $sql_1);

if (!$result_1) {
    echo json_encode(["success" => false, "message" => "Something went wrong"]);
    exit;
}

if (mysqli_num_rows($result_1) > 0) {
    // Remove interest
    $sql_2 = "DELETE FROM intrested_users_properties WHERE user_id=$user_id AND property_id=$property_id";
    $result_2 = mysqli_query($conn, $sql_2);

    // Get updated count
    $count_result = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM intrested_users_properties WHERE property_id=$property_id");
    $count_row = mysqli_fetch_assoc($count_result);
    $count = $count_row['cnt'] ?? 0;

    echo json_encode([
        "success" => true,
        "is_interested" => false,
        "property_id" => $property_id,
        "count" => $count
    ]);
    exit;
} else {
    // Add interest
    $sql_3 = "INSERT INTO intrested_users_properties (user_id, property_id) VALUES ($user_id, $property_id)";
    $result_3 = mysqli_query($conn, $sql_3);

    // Get updated count
    $count_result = mysqli_query($conn, "SELECT COUNT(*) as cnt FROM intrested_users_properties WHERE property_id=$property_id");
    $count_row = mysqli_fetch_assoc($count_result);
    $count = $count_row['cnt'] ?? 0;

    echo json_encode([
        "success" => true,
        "is_interested" => true,
        "property_id" => $property_id,
        "count" => $count
    ]);
    exit;
}