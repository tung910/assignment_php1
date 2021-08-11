<?php
require './xoa.php';
$check_nv = xoa('`nhan_vien`');
if ($check_nv === true) {
    # code...
    header('location: http://localhost/web_ban_hang/admin/index.php?page=nhanvien');
    die;
}
