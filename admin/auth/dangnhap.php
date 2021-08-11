<?php session_start();
require_once './../../db/conn.php';
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass =md5($pass);
    // var_dump($pass);die;
    $sql="SELECT * FROM khach_hang WHERE email_khachhang = '$email' AND pass = '$pass'";
    $query = mysqli_query($conn,$sql);
    // var_dump(mysqli_num_rows($query));die;
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['email'] = $email;
        header('location: http://localhost/web_ban_hang/index.php?page=giohang#carts');
        die;
    }else{
      
        $_SESSION['loi'] = "Mật khẩu hoặc Password bị sai";
        header('location:http://localhost/web_ban_hang/admin/auth/dangnhaps.php');

    }
}