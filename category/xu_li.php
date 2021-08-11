<?php
require './../db/conn.php';
if(isset($_POST['capnhat']) && !empty($_POST)){
     echo "<pre>";
    // var_dump($_POST);
    // die;
$dia_chi = $_POST['dia_chi'];
$sdt = $_POST['sdt'];
$ghi_chu = $_POST['ghi_chu'];
$sql = "UPDATE hoa_don SET dia_chi = '$dia_chi', sdt = '$sdt', ghi_chu = '$ghi_chu'";
mysqli_query($conn, $sql);
$id_hoadon = $_POST['id_hoadon'];
$id_sp = $_POST['id_sp'];
$so_luong = $_POST['so_luong'];
$gia = $_POST['gia'];
$thanh_tien = $_POST['thanh_tien'];
$sql ="INSERT INTO hoa_don_chi_tiet(id_hoadon,id_sanpham,so_luong,don_gia,thanh_tien)VALUES(
'$id_hoadon','$id_sp','$so_luong','$gia','$thanh_tien')";
mysqli_query($conn, $sql);
unset($_SESSION['cart']);
// var_dump($_SESSION);die;
header('location: http://localhost/web_ban_hang/index.php?page=thanhcong#tcong');
}