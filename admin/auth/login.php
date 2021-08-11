<?php
session_start();
require_once './../../db/conn.php';
// var_dump($_POST);die;
if (isset($_POST['dk']) && !empty($_POST)) {
    if ((isset($_POST['pass']) &&
            isset($_POST['ten']) &&
            isset($_POST['email']) &&
            isset($_POST['gioi_tinh']) &&
            isset($_POST['phone'])  &&
            isset($_POST['dia_chi'])) &&
        (!empty($_POST['pass']) &&
            !empty($_POST['ten']) &&
            !empty($_POST['email']) &&
            !empty($_POST['gioi_tinh']) &&
            !empty($_POST['phone']) &&
            !empty($_POST['dia_chi']))
    ) {
        $ma = uniqid();
        $pass = $_POST['pass'];
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $gioi_tinh = $_POST['gioi_tinh'];
        $phone = $_POST['phone'];
        $dia_chi = $_POST['dia_chi'];
        $pass = md5($pass);
        // echo '<pre>';
        // var_dump($pass);
        // die;
        $sqli  = "SELECT * FROM khach_hang WHERE email_khachhang = '$email'";
        $query = mysqli_query($conn, $sqli);
        $num_row = mysqli_num_rows($query);
        // var_dump($num_row);die;
        if ($num_row > 0) {
            $_SESSION['emails'] = "Email đã sử dụng! Xin mời nhập lại Email!";
            header('location: http://localhost/web_ban_hang/admin/auth/login_form.php');
            die;
        }

        $sql = "INSERT INTO khach_hang(ma_khachhang,ten_khachhang,sdt_khachhang,dia_chi,gioi_tinh,email_khachhang,pass)
 VALUES('$ma','$ten','$phone','$dia_chi','$gioi_tinh','$email','$pass')";
        $query = mysqli_query($conn, $sql);
        // echo '<pre>';
        // var_dump($query);
        // die;
        if ($query === true) {
            header("location: http://localhost/web_ban_hang/admin/auth/dangnhaps.php");
            die;
        }
    } else {
        $_SESSION['loi'] = "Không để trống!";
        header('location: http://localhost/web_ban_hang/admin/auth/login_form.php');
        die;
    }
}
