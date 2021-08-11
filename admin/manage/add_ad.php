<?php
session_start();
?>
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
    <form action='http://localhost/web_ban_hang/admin/manage/add.php' method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Thêm sản phẩm</h2>
                    <h2 class="text-center" style="color: red;">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                        ?>
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="usr">Mã sp:</label>
                        <input required="true" type="text" name="ma" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Tên sp:</label>
                        <input required="true" type="text" name="ten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Anh sp:</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="form-group">
                        <label for="birthday">So luong:</label>
                        <input type="number" name="so_luong" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Giá sp:</label>
                        <input type="number" name="gia" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=" ">Nội dung:</label>
                        <input type="text" name="noi_dung" class="form-control" style="height: 150px;"></input>
                    </div>
                    <div class="form-group">
                        <label for=" ">Phân loại:</label>
                        <select name="phan_loai" id="">
                            <option value="Laptop">Laptop</option>
                            <option value="Điện thoại">Điện Thoại</option>
                            <option value="Phụ kiện">Phụ kiện</option>
                        </select>
                    </div>

                    <button name="add" class="btn btn-success">Thêm</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>