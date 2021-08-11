<?php
require './xoa.php';
$check_lh = xoa('`lien_he`');
if ($check_lh === true) {
    # code...
    header('location: http://localhost/web_ban_hang/admin/index.php?page=lienhe');
    die;
}