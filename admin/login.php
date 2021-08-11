<?php
session_start();
require_once './../db/conn.php';
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    $sql  = "SELECT * FROM nhan_vien WHERE email = '$email' AND pass = '$pass'";
    $data = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($data);
    if ($count > 0) {
        header('location: index_nhanvien.php');
        die;
    } else {
        $_SESSION['err'] = "Xin mời kiểm tra lại!";
        header('location: login_nvv.php');
        die;
    }
}
