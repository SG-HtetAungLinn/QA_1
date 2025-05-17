<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-3 col-sm-10 col-12 shadow rounded p-5 bg-light">
            <div class="alert alert-danger" id="errorMsg" style="display: none;">
            </div>
            <h1 class="text-center mb-4 text-theme">Login Form</h1>
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
    <script src="./js/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>