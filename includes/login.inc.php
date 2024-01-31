<?php

session_start();

require "../includes/constants.php";
require "../includes/database.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_email = trim($_POST['username_email']);
    $password = trim($_POST['password']);

    if (empty($username_email) || empty($password)) {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'All fields are Required'));
        echo json_encode($response);
        exit;
    }

    $conn = openDatabaseConnection();

    $query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        $user_password = $user['password'];

        if (password_verify($password, $user_password)) {
            $_SESSION['user'] = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'fullname' => $user['fullname'],
                'phone' => $user['phone'],
            ];

            header('Content-Type: application/json');
            $response = array('data' => array('success' => true, 'message' => 'Login successful'));
            echo json_encode($response);
            exit;
        } else {
            header('Content-Type: application/json');
            $response = array('data' => array('success' => false, 'message' => 'Invalid password'));
            echo json_encode($response);
            exit;
        }
    } else {
        header('Content-Type: application/json');
        $response = array('data' => array('success' => false, 'message' => 'User not found'));
        echo json_encode($response);
        exit;
    }

    closeDatabaseConnection($conn); // Close the database connection
} else {
    header('Content-Type: application/json');
    $response = array('data' => array('success' => false, 'message' => 'Invalid form submission'));
    echo json_encode($response);
    exit;
}
