<?php
session_start();
require_once './../db/conn.php';
if (isset($_POST['gui'])) {
    if ((!empty($_POST['ten']) &&
        !empty($_POST['email']) &&
        !empty($_POST['sdt']) &&
        !empty($_POST['mess'])) && (isset($_POST['ten']) &&
        isset($_POST['email']) &&
        isset($_POST['sdt']) &&
        isset($_POST['mess']))) {
        $ten = $_POST['ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $dv = $_POST['dv'];
        $noi_dung = $_POST['mess'];
        $sql = "INSERT INTO `lien_he`(`ten`, `email`, `sdt`, `dich_vu`, `noi_dung`) VALUES ('$ten','$email','$sdt','$dv','$noi_dung')";
        $query = mysqli_query($conn, $sql);
        // var_dump($query);die;
        if ( $query === true) {
            $_SESSION['lh_tc'] = "Cảm ơn bạn đã quan tâm! chúng tôi sẽ liên hệ lại cho bạn!";
            header('location: http://localhost/web_ban_hang/index.php?page=lienhe#contact');
            die;
        } else{
            $_SESSION['lh_ktc'] = "Vui lòng kiểm tra lại thông tin!";
            header('location: http://localhost/web_ban_hang/index.php?page=lienhe#contact');
            die;
        }
    }
    else{
        $_SESSION['lh_ktc'] = "Vui lòng kiểm tra lại thông tin!";
        header('location: http://localhost/web_ban_hang/index.php?page=lienhe#contact');
        die;
    }
}
