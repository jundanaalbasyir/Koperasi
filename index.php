<?php
error_reporting(0);
session_start();
if ($_SESSION['role'] == "2") {
    header("Location: admin/admin-dashboard.php");
} elseif ($_SESSION['role'] == "1") {
    header("Location: guru/guru-dashboard.php");
}elseif ($_SESSION['role'] == "0") {
    header("Location: user/user-dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>

<body>
    <div id="login-page">
        <div class="container">
            <form class="form-login" action="function/proses.php" method="post">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
                    <br>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <hr>

                    <button class="btn btn-theme btn-block" type="submit" value="Login" name="login"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>
                    <div class="registration">
                        Don't have an account yet?<br />
                        <a class="" href="#">
                            Create an account
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login-bg.jpg", {
            speed: 500
        });
    </script>
</body>

</html>