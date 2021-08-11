<?php
require_once './../../db/conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM san_pham WHERE id = $id";
    $data = mysqli_query($conn, $sql);
header('location: http://localhost/web_ban_hang/admin/index.php');
}