<?php include("../includes/init.php"); ?>
<?php include("../includes/db.php"); ?>
<?php include("../includes/functions.php"); ?>

<?php

if (isset($_SESSION['username'])) {
    redirect("../index.php");
}

if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select_user_sql = "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'";
    $select_user_query = mysqli_query($connection, $select_user_sql);

    if (mysqli_num_rows($select_user_query) > 0) {
        $_SESSION['username'] = $username;
        redirect("index.php");
    } else {
        echo "Login failed";
    }
}

?>

<?php include("../includes/header_auth.php"); ?>

    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
    </div>
    <form class="user" method="post">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="username" name="username"
                   aria-describedby="username" placeholder="Enter Username...">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="password" name="password"
                   placeholder="Password">
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" id="customCheck">
                <label class="custom-control-label" for="customCheck">Remember Me</label>
            </div>
        </div>
        <input type="submit" name="login_submit" class="btn btn-primary btn-user btn-block" value="Login">
<!--        <hr>-->
<!--        <a href="../index.php" class="btn btn-google btn-user btn-block">-->
<!--            <i class="fab fa-google fa-fw"></i> Login with Google-->
<!--        </a>-->
<!--        <a href="../index.php" class="btn btn-facebook btn-user btn-block">-->
<!--            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook-->
<!--        </a>-->
    </form>
<!--    <hr>-->
<!--    <div class="text-center">-->
<!--        <a class="small" href="forgot-password.php">Forgot Password?</a>-->
<!--    </div>-->
<!--    <div class="text-center">-->
<!--        <a class="small" href="register.php">Create an Account!</a>-->
<!--    </div>-->


<?php include("../includes/footer_auth.php"); ?>