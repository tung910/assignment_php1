<?php
?>
<table class="table align-middle table-bordered" style="width: 1200px; margin: 10px auto; ">
    <thead class="table-light">
        <tr>
        <th colspan="10">
                <h2 style="text-align: center; font-weight: bold;">Hóa đơn khách hàng</h2>
            </th>
        </tr>
        <tr>
            <th scope="col">
                <h2>#</h2>
            </th>
            <th scope="col">
                <h2>ID HD</h2>
            </th>
            <th scope="col">
                <h2>mã hóa đơn</h2>
            </th>
            <th scope="col">
                <h2>mã kh</h2>
            </th>
            <th scope="col">
                <h2>Địa chỉ</h2>
            </th>
            <th scope="col">
                <h2>Số điện thoại</h2>
            </th>
            <th scope="col">
                <h2>Ngày mua</h2>
            </th>
            <th scope="col">
                <h2>Ngày giao</h2>
            </th>
            <th scope="col">
                <h2>Tổng tiền</h2>
            </th>
            <th scope="col">
                <h2>Hủy</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $data = mysqli_query($conn, "SELECT * FROM hoa_don");
        while ($row = mysqli_fetch_array($data)) {
            $i++ ?>

            <tr>
                <td scope="col">
                    <h4><?= $i  ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['id'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ma_hoadon'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['id_khachhang'] ?></h4>
                </td>
                <td scope="col">
                    <h4>

                        <input value="<?= $row['dia_chi'] ?>" name="dia_chi" alt="">

                    </h4>
                </td>
                <td scope="col">
                    <h4><input name="sdt" value="<?= $row['sdt'] ?>" id=""></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ngay_mua'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ngay_giao'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= number_format($row['tong_tien'], 0, '', '.') ?></h4>
                </td>
                <td>
                    <a href="./category/xoa_hd.php?id=<?= $row['id'] ?>">Hủy</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>

</table>
<table class="table align-middle table-bordered" style="width: 1200px; margin: 20px auto; ">
    <thead class="table-light">
        <tr>
            <th colspan="10">
                <h2 style="text-align: center; font-weight: bold;">Chi tiết</h2>
            </th>
        </tr>
        <tr>
            <th scope="col">
                <h2>#</h2>
            </th>
            <th scope="col">
                <h2>ID hóa đơn</h2>
            </th>
            <th scope="col">
                <h2>ID sản phẩm</h2>
            </th>
            <th scope="col">
                <h2>Số lượng</h2>
            </th>
            <th scope="col">
                <h2>Đơn giá</h2>
            </th>
            <th scope="col">
                <h2>Thành tiền</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $data = mysqli_query($conn, "SELECT * FROM hoa_don_chi_tiet");
        while ($row = mysqli_fetch_array($data)) {
            $i++ ?>

            <tr>
                <td scope="col">
                    <h4><?= $i  ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['id_hoadon'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['id_sanpham'] ?></h4>
                </td>
                <td scope="col">
                    <h4>
                        <?= $row['so_luong'] ?>
                    </h4>
                </td>
                <td scope="col">
                    <h4><?= number_format($row['don_gia'] ,0,'','.')?></h4>
                </td>
                <td scope="col">
                    <h4><?= number_format($row['thanh_tien'], 0, '', '.') ?></h4>
                </td>

            </tr>
        <?php } ?>
    </tbody>

</table>