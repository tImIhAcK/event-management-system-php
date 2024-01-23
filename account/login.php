<?php
include '../includes/constants.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS - Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/account_style.css">
</head>

<body>
    <div class="wrapper">
        <h1>Welcome back</h1>
        <div id="response"></div>
        <form id="form" action="#" method="post">
            <input type="text" id="username_email" name="username_email" placeholder="Username/Email">
            <input type="password" id="password" name="password" placeholder="********">
            <button type="submit">Login</button>
        </form>
        <div class="member">
            <p>Do no have account? <a href="./register.php">register here</a></p>
            <p><a href="#">Forgot password</a></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>