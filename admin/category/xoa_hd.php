<?php

require "./xoa.php";
$check_nv = xoa('`hoa_don`');
if ($check_nv === true) {
    # code...
    header('location: http://localhost/web_ban_hang/admin/index.php?page=hoadon');
    die;
}
