<?php
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['auth'])){
    header('location:chatroom.php');
}
?>
<main class="container"> 
    <div class="row my-5">
        <div class = "col-md-6">
            <div class = "card border-success">
                <div class = "card-header display-6 text-center bg-success text-white"> LOG IN</div>
                <div class = "card-body">
                    <form id="form-login">
                        <div id="alert-login"></div>
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_name" id="user_name_login">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password_login">
                        </div>
                        <button type="button" class="btn btn-sucess" id=""btn-login>SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
        <div class = "col-md-6">
            <div class = "card border-dark">
                <div class = "card-header display-6 text-center bg-dark text-white"> REGISTER </div>
                <div class = "card-body">
                    <form id="form-register">
                        <div id="alert-register"></div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="user_name" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user_name" id="user_name_login">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password_login">
                        </div>
                        <button type="button" class="btn btn-sucess" id=""btn-login>SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>