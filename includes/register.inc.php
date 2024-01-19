<?php

require "../includes/constants.php";
require "../includes/database.php";

// function redirect($message, $location)
// {
//     $_SESSION['register'] = $message;
//     header("Location: $location");
//     exit;
// }

function isUsernameTaken($conn, $username)
{
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result) > 0;
}

function isEmailTaken($conn, $email)
{
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    return mysqli_num_rows($result) > 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $re_password = trim($_POST['re_password']);

    if (empty($username) || empty($email) || empty($password) || empty($re_password)) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'All fields must be filled'));
        echo json_encode($response);
        exit;
    }

    if (strlen($username) < 3 || strlen($username) > 30) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Username must be between 3 to 30 characters'));
        echo json_encode($response);
        exit;
    }

    $conn = openDatabaseConnection(); // Open the database connection

    if (isUsernameTaken($conn, $username)) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'User with this username exists.'));
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Invalid email address'));
        echo json_encode($response);
        exit;
    }

    if (isEmailTaken($conn, $email)) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'User with this email already exist'));
        echo json_encode($response);
        exit;
    }

    if (strlen($password) < 6 || strlen($re_password) < 6) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Password length must not be less than 6'));
        echo json_encode($response);
        exit;
    }

    if ($password !== $re_password) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Password do not match.'));
        echo json_encode($response);
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $query);

    if (!mysqli_errno($conn)) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => true, 'message' => 'Registration successfull'));
        echo json_encode($response);
        exit;
    } else {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Registration failed'));
        echo json_encode($response);
        exit;
    }

    closeDatabaseConnection($conn); // Close the database connection
} else {
    header('Content-Type: application/json');
    $response =  array('data' => array('success' => false, 'message' => 'Invalid form submission'));
    echo json_encode($response);
    exit;
}
