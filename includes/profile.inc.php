<?php
session_start();

require "../includes/constants.php";
require "../includes/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $phone = trim($_POST['phone']);

    if (empty($phone) || empty($fullname)) {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'All fields are Required'));
        echo json_encode($response);
        exit;
    }

    $phoneRegex = '/^(\+\d{11}|\d{11})$/';

    if (!preg_match($phoneRegex, $phone)) {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'Invalid phone number format'));
        echo json_encode($response);
        exit;
    }

    $conn = openDatabaseConnection();

    $userId = $_SESSION['user']['user_id'];
    $query = "UPDATE users SET fullname='$fullname', phone='$phone' WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['user']['fullname'] = $fullname;
        $_SESSION['user']['phone'] = $phone;


        header('Content-Type: application/json');
        $response = array('data' => array('success' => true, 'message' => 'Profile update successfully'));
        echo json_encode($response);
        exit;
    } else {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'Profile updates failed'));
        echo json_encode($response);
        exit;
    }

    closeDatabaseConnection($conn);
} else {
    header('Content-Type: application/json');
    $response = array('data' => array('success' => false, 'message' => 'Invalid form submission'));
    echo json_encode($response);
    exit;
}