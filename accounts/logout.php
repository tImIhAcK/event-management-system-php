<?php

include '../includes/constants.php';

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: ../");
    exit;
}
