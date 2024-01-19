<?php

require 'constants.php';

function openDatabaseConnection()
{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        header('Content-Type: application/json');
        $response =  array('data' => array('success' => false, 'message' => 'Database connection failed'));
        echo json_encode($response);
        exit;
    }

    return $conn;
}

function closeDatabaseConnection($conn)
{
    if ($conn) {
        $conn->close();
    }
}
