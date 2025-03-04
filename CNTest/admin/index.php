<?php
header("X-XSS-Protection: 0");
session_start();
require('database.php');
if (isset($_SESSION['admin'])) {
    print '<script>top.location = "admin/home.php";</script>';
} else if (isset($_SESSION['developer'])) {
    print '<script>top.location = "developer/home.php";</script>';
}
?>

<?php
    if (isset($_POST['submit'])) {
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE mobile='$mobile' AND status=1";
        $result1 = mysqli_query($con, $query);
        $info = mysqli_fetch_array($result1, MYSQLI_ASSOC);
        $loginas = $info['user_type'];
        if (mysqli_num_rows($result1) == 0) {
            print '<script>alert("Invalid mobile number.1");</script>';
            echo '<script>top.location = "index.php";</script>';
        } else {
            if ($loginas == "admin") {
                $check = "SELECT * FROM users WHERE mobile = '$mobile' AND user_type='$loginas'";
                $result = mysqli_query($con, $check);
                $check2 = mysqli_num_rows($result);

                if ($check2 == 0) {
                    print '<script>alert("Invalid mobile number or password.2");</script>';
                    echo '<script>top.location = "index.php";</script>';
                }
                while ($info =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $dbpassword = $info['password'];
                    $admin_id = $info['u_id'];
                    // if (password_verify($password, $dbpassword)) {
                    if ($password == $dbpassword) {
                        $_SESSION['admin'] = $admin_id;
                        echo '<script>top.location = "admin/home.php";</script>';
                    } else {
                        // echo "$admin_id" . "$mobile" . "$password"."$dbpassword";
                        print '<script>alert("Invalid mobile number or password.3");</script>';
                        echo '<script>top.location = "index.php";</script>';
                    }
                }
            } elseif ($loginas == "developer") {
                $check = "SELECT * FROM users WHERE mobile = '$mobile' AND user_type='$loginas'";
                $result = mysqli_query($con, $check);
                $check2 = mysqli_num_rows($result);

                if ($check2 == 0) {
                    print '<script>alert("Invalid mobile number or password.");</script>';
                    echo '<script>top.location = "index.php";</script>';
                }
                while ($info =  mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $dbpassword = $info['password'];
                    $developer_id = $info['u_id'];

                    // if (password_verify($password, $dbpassword)) {
                    if ($password == $dbpassword) {
                        $_SESSION['developer'] = $developer_id;
                        // $_SESSION['language'] = 'मराठी';
                        echo '<script>top.location = "developer/home.php";</script>';
                    } else {
                        print '<script>alert("Invalid mobile number or password.");</script>';
                        echo '<script>top.location = "index.php";</script>';
                    }
                }
            }
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>CloudsNetworks || Login page</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/vendors/css/vendors.min.css">
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/theme.min.css">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    

    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="./assets/images/auth/auth-cover-login-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-50 mb-5">
                        <img src="./assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                    <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                    <form method="POST" action="#" class="w-100 mt-4 pt-2" novalidate="" autocomplete="off">
                        <div class="mb-4">
                            <input id="mobile" type="text" name="mobile" class="form-control" placeholder="Mobile Number" required autofocus minlength="10" maxlength="10" oninput="numbersOnly()">
                        </div>
                        <div class="mb-3">
                            <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="togglePassword">
                                    <label class="custom-control-label c-pointer" for="togglePassword">Show password</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                    <label class="custom-control-label c-pointer" for="rememberMe">Remember Me</label>
                                </div>
                            </div>
                            <!-- <div>
                                <a href="auth-reset-cover.php" class="fs-11 text-primary">Forget password?</a>
                            </div> -->
                        </div>
                        <div class="mt-5">
                            <button type="submit" name="submit" class="btn btn-lg btn-primary w-100">Login</button>
                        </div>
                        <script>
                            const togglePassword = document.querySelector("#togglePassword");
                            const password = document.querySelector("#password");

                            togglePassword.addEventListener("click", function() {
                                // toggle the type attribute
                                const type = password.getAttribute("type") === "password" ? "text" : "password";
                                password.setAttribute("type", type);

                                // toggle the icon
                                this.classList.toggle("bi-eye");
                            });

                            function numbersOnly() {
                                var textInput = document.getElementById("mobile").value;
                                textInput = textInput.replace(/[^0-9]/g, "");
                                document.getElementById("mobile").value = textInput;
                            }
                        </script>
                    </form>
                    <!-- <div class="w-100 mt-5 text-center mx-auto">
                        <div class="mb-4 border-bottom position-relative"><span class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">or</span></div>
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Facebook">
                                <i class="feather-facebook"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Twitter">
                                <i class="feather-twitter"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Github">
                                <i class="feather-github text"></i>
                            </a>
                        </div>
                    </div> -->
                    <div class="mt-5 text-muted">
                        <span> Don't have an account?</span>
                        <a href="auth-register-cover.php" class="fw-bold">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->

    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="./assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="./assets/js/common-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="./assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>