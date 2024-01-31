<?php

session_start();

require "../includes/constants.php";
require "../includes/database.php";

// Handle Profile Image
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the file is uploaded successfully
    // if (!isset($_FILES['profile_image']) || $_FILES['profile_image']['error'] !== 0) {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => false, 'message' => 'Invalid file upload'));
    //     echo json_encode($response);
    //     exit;
    // }

    // $image_name = $_FILES['profile_image']['name'];
    // $image_size = $_FILES['profile_image']['size'];
    // $image_tmp_name = $_FILES['profile_image']['tmp_name'];

    // if ($image_size > 5 * 1024 * 1024) {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => false, 'message' => 'File is too large. Maximum is 5MB'));
    //     echo json_encode($response);
    //     exit;
    // }


    // $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
    // $img_ex = strtolower($img_ex);
    // $allowed_ex = array('png', 'jpg', 'jpeg');

    // if (!in_array($img_ex, $allowed_ex)) {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => true, 'message' => 'File type not allowed'));
    //     echo json_encode($response);
    //     exit;
    // }

    // $new_img_name = uniqid("IMG-", true) . '.' . $img_ex;
    // $img_upload_path = BASE_URL . 'assets/uploads/profile__images' . $new_img_name;

    $upload_directory =  BASE_URL . 'uploads/';
    mkdir($upload_directory);

    // if (!is_dir($upload_directory)) {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => false, 'message' => 'Folder does not exists'));
    //     echo json_encode($response);
    //     exit;
    // } else {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => true, 'message' => 'Folder exists'));
    //     echo json_encode($response);
    //     exit;
    // }


    // if (!is_dir($upload_directory)) {
    //     mkdir($upload_directory, 0755, true);
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => true, 'message' => 'Folder created successfully.'));
    //     echo json_encode($response);
    //     exit;
    // } else {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => false, 'message' => 'Error creating folder'));
    //     echo json_encode($response);
    //     exit;
    // }

    // move_uploaded_file($image_tmp_name, $img_upload_path);

    // if (move_uploaded_file($image_tmp_name, $img_upload_path)) {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => true, 'message' => 'Profile image updated successfully'));
    //     echo json_encode($response);
    //     exit;
    // } else {
    //     header('Content-Type: application/json');
    //     $response = array('data' => array('success' => false, 'message' => 'Profile image update error.' . $image_tmp_name));
    //     echo json_encode($response);
    //     exit;
    // }
} else {
    header('Content-Type: application/json');
    $response = array('data' => array('success' => false, 'message' => 'Invalid form submission'));
    echo json_encode($response);
    exit;
}
