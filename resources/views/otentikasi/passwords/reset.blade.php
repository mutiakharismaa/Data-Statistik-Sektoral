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

<body>
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card radius-15">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <div class="card-body p-md-5">
                                    <div class="text-left">
                                        <img src="{{asset('assets/template_admin')}}/assets/images/logo-img.png"
                                            width="180" alt="">
                                    </div>
                                    <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                    <p class="text-muted">We received your reset password request. Please enter your new
                                        password!</p>
                                    <div class="form-group mt-5">
                                        <label>New Password</label>
                                        <input type="text" class="form-control" placeholder="Enter new password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="text" class="form-control" placeholder="Confirm password" />
                                    </div>
                                    <button type="button" class="btn btn-primary btn-block">Change Password</button> <a
                                        href="authentication-login.html" class="btn btn-link btn-block"><i
                                            class='bx bx-arrow-back mr-1'></i>Back to Login</a>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="assets/images/login-images/forgot-password-frent-img.jpg"
                                    class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
</body>

</html>
