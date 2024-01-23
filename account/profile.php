<?php
include '../includes/constants.php';
include '../partials/_header.php';
include '../partials/_navbar.php';

?>
<div class="row">
    <div class="col-md-4 mt-1">
        <div class="card text-center sidebar">
            <div class="card-body">
                <img src="../assets/images/blank-profile.png" alt="" class="rounded-circle" width="150">
                <div class="mt-3">
                    <h3><?php echo $_SESSION['user']['username'] ?></h3>
                    <a href="">Events</a>
                    <a href="">Change Password</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 mt-1">
        <div class="card mb-3 content">
            <h1 class="m-3 pt-3">Profile</h1>
            <form method="post">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Fullname</h5>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="fullname" class="form-control" value="Adeniran John">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Username</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?php echo $_SESSION['user']['username'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <?php echo $_SESSION['user']['email'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5>Phone</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                            <input type="text" name="phone" class="form-control" value="+2348051610576">
                        </div>
                    </div>
                </div>
                <button class=" m-3 pt-3">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
include '../partials/_footer.php';
?>