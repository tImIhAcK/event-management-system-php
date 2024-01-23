<?php
include '../includes/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS - Login</title>
    <link rel="stylesheet" href="../assets/css/account_style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Create account</h1>
        <div id="response"></div>
        <form id="form" action="#" method="post">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="********">
            <input type="password" name="re_password" id="re_password" placeholder="********">
            <button type="submit">Create</button>
        </form>
        <div class="member">
            <p>Already have account? <a href="./login.php">login here</a></p>
            <p><a href="#">Forgot password</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/register.js"></script>
</body>

</html>