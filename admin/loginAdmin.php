<?php
require_once './../db/conn.php';
if (isset($_POST['btn'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass = md5($pass);
    // var_dump($pass);die;
    $sql = "SELECT * FROM `admin` WHERE email = '$email' AND pass = '$pass'";
    $query = mysqli_query($conn, $sql);
    // var_dump(mysqli_num_rows($query));die;
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['email'] = $email;
        header('location: http://localhost/web_ban_hang/admin/index.php');
        die;
    } else {
        $_SESSION['errad'] = "Xin mời kiểm tra lại!";
        header('location: http://localhost/web_ban_hang/admin/loginAdmin_id.php');
        die;
    }
}
