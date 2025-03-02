<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 min-vw-100 d-flex justify-content-center align-items-center gradient-1">
        <div class="form-box border rounded-3 bg-white shadow p-3">
            <div class="row">
                <div class="col">
                    <form class="d-flex flex-column" action="" method="post">
                        <h2 class="text-center">AUTO DN</h2>
                        <label for="username" class="mt-2 mb-2">Username</label>
                        <input type="text" class="form-control" id="username">
                        <label for="password" class="mt-2 mb-2">Password</label>
                        <input type="password" class="form-control" id="password">
                        <div class="mt-2 d-flex flex-row justify-content-between">
                            <div class="col-mb-2">
                                <input type="checkbox" name="agree" id="agree">
                                <label for="agree" class="form-label control-form">Terms and Condition</label>
                            </div>
                            <div class="col-mb-1 ">
                                <a href="#" class="form-label control-form">Don't Have Account?</a>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
