<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATROOM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <?php
    session_start();
    if (!isset($_SESSION['auth'])){
        header('location:login.php');
    }
    ?>
    <main class="container">
        <div class="card-holder bg-dark text-center text-white display-5">
                CONVERSATION
        </div>
        <div class="card-body">
            <div class="message_holder">
            </div>
            <input type="text" class="form-control">
        </div>
    </main>
</body>
</html>