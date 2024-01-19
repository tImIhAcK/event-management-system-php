<?php

include 'includes/constants.php';

if ($_SESSION['user']) {
    header('Location: views/home.php');
} else {
    header('Location: views/accounts/login.php');
}
