<?php
require_once './../db/conn.php';
if(isset($_GET['ma'])){
    $ma = $_GET['ma'];
    $sql = "DELETE FROM hoa_don WHERE ma_hoadon = '$ma'";
    mysqli_query($conn,$sql);
    header('location: http://localhost/web_ban_hang/index.php?page=kiemtragiohang#htgh');die;
}