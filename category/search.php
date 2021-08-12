<?php
$email = $_SESSION['email'];
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM hoa_don WHERE ma_hoadon = '$search'";
    $data = mysqli_query($conn, $sql);
    $kh = "SELECT * FROM khach_hang WHERE email_khachhang = '$email'";
    $id_khachhang = mysqli_query($conn, $kh);
    $fech_id_kh = mysqli_fetch_array($id_khachhang);
    $ten_kh = $fech_id_kh['ten_khachhang'];
}
// var_dump($_POST);
?>
<table id="htgh" class="table align-middle table-bordered" style="width: 1200px; margin: 30px auto; margin-bottom: 20px;">
    <thead class="table-light">
        <tr>
            <th colspan="10" style="background-color: #27ae60; color: white;">
                <h2 style="text-align: center ;">Hóa đơn của bạn</h2>
            </th>
        </tr>
        <tr>
            <th scope="col">
                <h2>Id</h2>
            </th>
            <th scope="col">
                <h2>mã hóa đơn</h2>
            </th>
            <th scope="col">
                <h2>Tên kh</h2>
            </th>

            <th scope="col">
                <h2>Ngày mua</h2>
            </th>
            <th scope="col">
                <h2>Ngày giao</h2>
            </th>
            <th scope="col">
                <h2>Ghi chú</h2>
            </th>
            <th scope="col">
                <h2>Tổng tiền</h2>
            </th>
            <th scope="col">
                <h2>Trạng thái</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <form action="./category/xu_li.php" id="huy" method="post">
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($data)) {
                $i++ ?>
                <tr>
                    <td scope="col">
                        <h4><?= $i  ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= $row['ma_hoadon'] ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= $ten_kh ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= $row['ngay_mua'] ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= $row['ngay_giao'] ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= $row['ghi_chu'] ?></h4>
                    </td>
                    <td scope="col">
                        <h4><?= number_format($row['tong_tien'], 0, '', '.') ?></h4>
                    </td>
                    <td scope="col">
                        <h5 style="color: gray;">Đang xử lí</h5>
                    </td>
                </tr>
            <?php } ?>
    </tbody>
</table>