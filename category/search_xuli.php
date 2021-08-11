<?php
var_dump($_POST);
header('location: http://localhost/web_ban_hang/index.php?page=kiemtra');
$search = $_POST['search'];
$sql = "SELECT * FROM san_pham WHERE ten = '$search'";
$data = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($data, 1);
    