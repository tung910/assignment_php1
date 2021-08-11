<?php
session_start();
require_once './db/conn.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./style/style.css" rel="stylesheet">
    <title>Trang chủ</title>
</head>

<body>
    <?php
    require_once './layout/header.php';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    } else {
        $search = '';
    }
    switch ($page) {
        case '':
            require_once './category/san_pham.php';
            break;
        case 'tatcasanpham':
            require_once './category/all.php';
            break;
        case 'laptop':
            require_once './category/laptop.php';
            break;
        case 'phone':
            require_once './category/dienthoai.php';;
            break;
        case 'phukien':
            require_once './category/phukien.php';
            break;
        case 'chitiet':
            require_once './category/chitiet.php';
            break;
        case 'giohang':
            require_once './category/cart.php';
            break;
        case 'hoadon':
            require_once './category/hoadon.php';
            break;
        case 'thanhcong':
            require_once './category/thanh_cong.php';
            break;
        case 'lienhe':
            require_once './layout/lienhe.php';
            return;
        case 'kiemtragiohang':
            require_once './category/kiemtragiohang.php';
            break;
        case 'tintuc':
            require_once './category/tintuc.php';
            break;
        case 'kiemtra':
            require_once './category/search.php';
            break;
        case 'dsythich':
            require_once './category/ds_ythich.php';
            break;
        default:
            # code...
            break;
    }
    require_once './layout/footer.php';
    ?>
    <script src="./js/mediumzoom.js"></script>
    <script>
        function alertss() {
            alert('Đăng nhập để mua hàng');
            return false
        }
        function delt(name) {
            return confirm("Bạn có muốn xóa " + name + " này không?");
        }
    </script>
</body>
</html>