<?php
require_once './../../db/conn.php';
$ten = $_POST['ten'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phan_quyen = $_POST['phan_quyen'];
$pass = md5($pass);
    $sql = "INSERT INTO nhan_vien(ten,email,pass,phan_quyen)"."
    VALUES('$ten','$email','$pass','$phan_quyen')
    ";
    mysqli_query($conn,$sql);
    if ( mysqli_query($conn,$sql) == true) {
      header('location: http://localhost/web_ban_hang/admin/index.php?page=nhanvien');
    }
