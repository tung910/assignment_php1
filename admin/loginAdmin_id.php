<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Admin</title>
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
</head>

<body>
    <form action="http://localhost/web_ban_hang/admin/loginAdmin.php" method="post">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Admin</h2>
                    <h2 class="text-center" style="color: red;">
                        <?php if (isset($_SESSION['errad'])) {
                            echo $_SESSION['errad'];
                            unset($_SESSION['errad']);
                        } ?>
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input required="true" type="password" name="pass" class="form-control" id="pwd">
                    </div>
                    <button name="btn" class="btn btn-success">Đăng nhập</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>