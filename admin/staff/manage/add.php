<?php
session_start();
require_once './../../../db/conn.php';
if (isset($_POST['add']) && !empty($_POST)) {
    if (
        (isset($_POST['ma']) &&
            isset($_POST['ten']) &&
            isset($_POST['so_luong']) &&
            isset($_POST['noi_dung']) &&
            isset($_POST['phan_loai']) &&
            isset($_POST['gia']) &&
            isset($_FILES['img'])) &&
        (!empty($_POST['ma']) &&
            !empty($_POST['ten']) &&
            !empty($_POST['so_luong']) &&
            !empty($_POST['noi_dung']) &&
            !empty($_POST['gia']) &&
            !empty($_POST['phan_loai']) &&
            !empty($_FILES['img']))
    ) {
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $so_luong = $_POST['so_luong'];
        $noi_dung = $_POST['noi_dung'];
        $phan_loai = $_POST['phan_loai'];
        $gia = $_POST['gia'];
        $path = $_FILES['img']['tmp_name'];
        move_uploaded_file($path, './../../img/upload/' . $_FILES['img']['name']);
        $img = $_FILES['img']['name'];
        $sql = "INSERT INTO `san_pham`(`ma`, `ten`, `img`, `so_luong`, `gia`, `noi_dung`, `ma_ploai`) VALUES ('$ma','$ten','$img','$so_luong','$gia','$noi_dung','$phan_loai')";
        mysqli_query($conn, $sql);
        header('location: http://localhost/web_ban_hang/admin/index_nhanvien.php?page=tatcasanpham');
        die;
    } else {
        $_SESSION['error'] = "Không được bỏ trống!";
        header('location: http://localhost/web_ban_hang/admin/staff/manage/add_sp.php');
        die;
    }
}
