<?php
require_once './../db/conn.php';
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang chủ</title>
    <link href="./../style/style.css" rel="stylesheet">
</head>
<body>
    <?php
    require_once './layout/header.php';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = '';
    }
    switch ($page) {
        case '':
            require_once './manage/san_pham.php';
            break;
        case 'tatcasanpham':
            require_once './manage/san_pham.php';
            break;
        case 'qlkhang':
            require_once './category/danhsachkhachhang.php';
            break;
        case 'nhanvien':
            require_once './category/nhanvien.php';
            break;
        case 'lienhe':
            require_once './category/lienhe_admin.php';
            break;
        case 'giohang':
            require_once './category/quanligiohang.php';
            break;
        case 'hoadon':
            require_once './category/hoadon.php';
            break;
        default:
            # code...
            break;
    }
    // require_once './layout/footer.php';
    ?>
    <script>
        function delt(name) {
            return confirm("Bạn có muốn xóa ") + name + " này không?";
        }
    </script>
</body>

</html>