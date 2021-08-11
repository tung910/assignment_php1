<?php
require './xoa.php';
$check = xoa('`khach_hang`');
if ($check === true) {
    # code...
    header('location: http://localhost/web_ban_hang/admin/index.php?page=qlkhang');
    die;
}