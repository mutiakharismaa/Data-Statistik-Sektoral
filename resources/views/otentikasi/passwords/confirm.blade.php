<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Reset Password</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/template_admin')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- loader-->
    <link href="{{asset('assets/template_admin')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('assets/template_admin')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/bootstrap.min.css" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/icons.css" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('assets/template_admin')}}/assets/css/app.css" />
</head>

<body class="bg-forgot">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card shadow-lg forgot-box">
                <div class="card-body p-md-5">
                    <div class="text-center">
                        <img src="assets/images/icons/forgot-2.png" width="140" alt="" />
                    </div>
                    <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                    <p class="text-muted">Enter your registered email ID to reset the password</p>
                    <div class="form-group mt-5">
                        <label>Email id</label>
                        <input type="text" class="form-control form-control-lg radius-30"
                            placeholder="example@user.com" />
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block radius-30">Send</button> <a
                        href="authentication-login.html" class="btn btn-link btn-block"><i
                            class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
