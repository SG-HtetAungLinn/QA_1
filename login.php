<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #00205b;">
    <div class="d-flex justify-content-center align-items-center p-4" style="min-height: 100vh;">
        <div class="col-md-10 col-sm-12 col-12 shadow rounded p-lg-5 p-0" style="background-color: #fff;">
            <div class="row">
                <div class="col-lg-6 col-6 offset-3 offset-lg-0 d-flex align-items-center justify-content-center">
                    <img src="./img/login.jpg" alt="Login" width="100%" />
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="w-75">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="./img/logo.png" alt="Logo" class="" width="80%">
                        </div>
                        <div class="alert alert-danger" id="errorMsg" style="display: none;">
                        </div>
                        <form action="" method="POST" id="login_form">
                            <div class="form-group mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" name="username" class="form-control" id="username" value="" placeholder="Enter Username" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" value="" placeholder="Enter Your Password" />
                            </div>
                            <input type="hidden" name="form_submit" value="1">
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary btn-theme w-100">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>