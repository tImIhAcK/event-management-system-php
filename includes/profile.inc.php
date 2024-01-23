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

    $phoneRegex = $phoneRegex = '/^(\+\d{11}|\d{11})$/';

    if (!preg_match($phoneRegex, $phone)) {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'Invalid phone number format'));
        echo json_encode($response);
        exit;
    }

    // Update user's fullname and phone in the database
    $conn = openDatabaseConnection();

    $userId = $_SESSION['user']['user_id'];
    $query = "UPDATE users SET fullname='$fullname', phone='$phone' WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = [
            'user_id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'fullname' => $user['fullname'],
            'phone' => $user['phone'],
        ];

        header('Content-Type: application/json');
        $response = array('data' => array('success' => true, 'message' => 'Profile update successfull'));
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
