<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Cap nhat</title>
    <!-- jQuery library -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <!-- Popper JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->

    <!-- Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>-->
</head>

<body>
    <form action='http://localhost/web_ban_hang/admin/category/them.php' method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Thêm Nhân viên</h2>
                    <h2 class="text-center" style="color: red;">
                        <?php
                        if (isset($_SESSION['err'])) {
                            echo $_SESSION['err'];
                            unset($_SESSION['err']);
                        }
                        ?>
                    </h2>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label for="usr">Tên:</label>
                        <input required="true" type="text" name="ten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input required="true" type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Mật khẩu:</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Phân quyền:</label>
                        <input type="number" class="form-control" name="phan_quyen">
                    </div>
                    <button name="add" class="btn btn-success">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>