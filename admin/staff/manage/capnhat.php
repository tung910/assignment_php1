<?php
require_once './../../../db/conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM san_pham WHERE id = $id";
    $data = mysqli_query($conn, $sql);
    if (isset($_POST['capnhat']) && !empty($_POST)) {
        $path = $_FILES['img']['tmp_name'];
        move_uploaded_file($path, './../../img/upload/' . $_FILES['img']['name']);
        $img = $_FILES['img']['name'];
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $so_luong = $_POST['so_luong'];
        $noi_dung = $_POST['noi_dung'];
        $phan_loai = $_POST['phan_loai'];
        $gia = $_POST['gia'];
        $sql = "UPDATE san_pham SET ma = '$ma', ten = '$ten', so_luong = '$so_luong', img = '$img', noi_dung = '$noi_dung', gia = '$gia', ma_ploai = '$phan_loai' WHERE id = $id";
       $query = mysqli_query($conn, $sql);
    //    var_dump($query);die;
        header('location: http://localhost/web_ban_hang/admin/index_nhanvien.php?page=tatcasanpham');
        die;
    }
    // var_dump($data);die;
}
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
    <form action='' method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Cập nhật danh mục</h2>
                </div>
                <?php while ($item = mysqli_fetch_array($data, 1)) {  ?>
                    <div class="panel-body">
                        <div class="form-group">
                            <label for="usr">Mã sp:</label>
                            <input required="true" type="text" name="ma" class="form-control" value="<?= $item['ma'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Tên sp:</label>
                            <input required="true" type="text" name="ten" class="form-control" value="<?= $item['ten'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="birthday">Anh sp:</label>
                            <input type="file" class="form-control" name="img">
                        </div>
                        <div class="form-group">
                            <label for="birthday">So luong:</label>
                            <input type="number" value="<?= $item['so_luong'] ?>" name="so_luong" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="birthday">So luong:</label>
                            <input type="number" value="<?= $item['gia'] ?>" name="gia" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=" ">Nội dung:</label>
                            <input type="text" name="noi_dung" class="form-control" style="height: 150px;"   value="<?= $item['noi_dung'] ?>" ></input>
                        </div>
                        <div class="form-group">
                            <label for=" ">Phân loại:</label>
                            <select name="phan_loai" id="">
                                <option value="<?=$item['ma_ploai'] ?>"></option>
                                <option value="Laptop">Laptop</option>
                                <option value="Diện thoại">Điện Thoại</option>
                                <option value="Phụ kiện">Phụ kiện</option>
                            </select>
                        </div>
                    <?php } ?>
                    <button name="capnhat" class="btn btn-success">Cập nhật</button>
                    </div>
            </div>
        </div>
    </form>
</body>

</html>