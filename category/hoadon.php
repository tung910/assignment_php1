<?php
// echo '<pre>';
// var_dump($_POST);
// die;
$email = $_SESSION['email'];
$kh = "SELECT * FROM khach_hang WHERE email_khachhang = '$email'";
$id_khachhang = mysqli_query($conn, $kh);
$fech_id_kh = mysqli_fetch_array($id_khachhang);
$id_kh = $fech_id_kh['id'];
$dia_chi = $fech_id_kh['dia_chi'];
$sdt = $fech_id_kh['sdt_khachhang'];
$tong_tien = $_POST['tong_tien'];
$ten_kh = $fech_id_kh['ten_khachhang'];
$trang_thai = 'đang xử lí';
$ma_hoadon = uniqid();
$ngay_mua = date('Y/m/d', time());
$ngay_giao = date('Y/m/d', strtotime($ngay_mua . ' + 5 days'));
$id_sp = $_POST['id_sp'];
$gia = $_POST['gia'];
$so_luong = $_POST['so_luong'];
$thanh_tien = $so_luong * $gia;
$sql = "INSERT INTO `hoa_don`(`id_khachhang`, `dia_chi`, `sdt`, `ngay_mua`, `ngay_giao`, `tong_tien`, `trang_thai`, `ma_hoadon`) VALUES ('$id_kh','$dia_chi','$sdt','$ngay_mua ','$ngay_giao','$tong_tien','$trang_thai','$ma_hoadon')";
$data = mysqli_query($conn, $sql);
?>
<form id="hdon" action="./category/xu_li.php" method="post" style="width: 100%;">
    <?php
    $i = 0;
    $data = mysqli_query($conn, "SELECT * FROM hoa_don WHERE id_khachhang = '$id_kh'ORDER BY id DESC LIMIT 1 ");
    while ($row = mysqli_fetch_array($data)) { ?>
        <div class="container ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center" style="font-weight: bold; font-size: 3em; margin-top: 10px  ; ">Địa chỉ nhận hàng</h2>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <!-- <label for="" style="font-size: 2em;">Mã hóa đơn:</label> -->
                        <input value="<?= $row['ma_hoadon'] ?>" type="hidden" class="form-control" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Tên nhận hàng:</label>
                        <input required="true" value="<?= $ten_kh ?>" name="pass" class="form-control" style="font-size: 2em;" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Địa chỉ nhận hàng:</label>
                        <input type="hidden" value="<?= $row['id'] ?>" name="id_hoadon" alt="">
                        <input type="text" require="true" style="font-size: 2em;" style="height: 50px; font-size: 2em;" class="form-control" value="<?= $row['dia_chi'] ?>" name="dia_chi" alt="">
                        <input type="hidden" value="<?= $id_sp ?>" name="id_sp" alt="">
                        <input type="hidden" value="<?= $so_luong ?>" name="so_luong" alt="">
                        <input type="hidden" value="<?= $gia ?>" name="gia" alt="">
                        <input type="hidden" value="<?= $thanh_tien ?>" name="thanh_tien" alt="">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Số điện thoại:</label>
                        <input required="true" name="sdt" value="<?= $row['sdt'] ?>" class="form-control" style="font-size: 2em;" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Ghi chú:</label>
                        <input required="true" type="text" name="ghi_chu" value="" class="form-control" style="font-size: 2em;" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Ngày mua hàng:</label>
                        <input required="true" disabled value="<?= $row['ngay_mua'] ?>" class="form-control" style="font-size: 2em;" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style=" font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Dự kiến giao hàng:</label>
                        <input required=" true" disabled value="<?= $row['ngay_giao'] ?>" class="form-control" style="font-size: 2em;" style="height: 50px; font-size: 2em;">
                    </div>
                    <div class="form-group">
                        <label for="pwd" style="font-size: 2em; font-weight: bold;" style="height: 50px; font-size: 2em;">Tổng tiền:</label>
                        <input required="true" disabled style="font-size: 2em;color: red;" style="height: 50px; font-size: 2em;" value="<?= number_format($row['tong_tien'], 0, '', '.') ?>" class="form-control">
                    </div>
                    <button name="capnhat" class="btn btn-success">Đặt hàng</button>
                </div>
            </div>
        </div>
    <?php } ?>
</form>
<!-- <button class="btn-primary btn" name="capnhat"><a style="color: white; text-decoration: none;" href="http://localhost/web_ban_hang/index.php?page=kiemtragiohang">Kiểm tra giỏ hàng </a></button>
</form> -->
<!-- <button class="btn btn-success" name="gui"><a href="http://localhost/web_ban_hang/index.php?page=kiemtragiohang" style="color: white;">Kiểm tra giỏ hàng</a></button> -->