<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Đăng kí</title>
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
</head>

<body>
    <form action="./login.php" method="POST">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Đăng kí tài khoản</h2>
                    <h2 class="text-center" style="color: red;">
                        <?php if (isset($_SESSION['loi'])) {
                            echo $_SESSION['loi'];
                            unset($_SESSION['loi']);
                        }
                        if (isset($_SESSION['emails'])) {
                            echo $_SESSION['emails'];
                            unset($_SESSION['emails']);
                        } ?>

                    </h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input required="true" type="text" name="ten" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <input type="date" class="form-control" id="birthday">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Sex:</label>
                        <input type="number" value="1" min="1" max="2" name="gioi_tinh" class="form-control" id="birthday">
                    </div>
                    <div class="form-group">
                        <label for=" ">Password:</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=" ">Phone:</label>
                        <input required="true" type="number" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="dia_chi" id="address">
                    </div>
                    <button name="dk" class="btn btn-success">Register</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>