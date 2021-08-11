<table class="table align-middle table-bordered" style="width: 1200px; margin: 10px auto; ">
    <thead class="table-light">
        <tr>
            <th scope="col">
                <h2>Id</h2>
            </th>
            <th scope="col">
                <h2>Mã</h2>
            </th>
            <th scope="col" style="width: 200px;">
                <h2>Tên Kh</h2>
            </th>
            <th scope="col" style="width: 250px;">
                <h2>Số điện thoại</h2>
            </th>
            <th scope="col">
                <h2>Địa chỉ</h2>
            </th>
            <th scope="col">
                <h5>Giới tính(1=Nam; 2=Nữ)</h5>
            </th>
            <th scope="col" style="width: 250px; height: 100px;">
                <h2>Email</h2>
            </th>
            <th scope="col">
                <h2>Pass</h2>
            </th>
            <th scope="col">
                <h2>Xóa</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM khach_hang";
        $data = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($data)) { ?>

            <tr>
                <td scope="col">
                    <h4><?= $row['id'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ma_khachhang'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ten_khachhang'] ?></h4>
                </td>
                <td scope="col">
                    <div class="boximg">
                        <h4><?= $row['sdt_khachhang'] ?></h4>
                    </div>
                </td>
                <td scope="col">
                    <h4><?= $row['dia_chi'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['gioi_tinh'] ?></h4>
                </td>
                <td scope="col" style="overflow: hidden;">
                    <h4><?= $row['email_khachhang'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['pass'] ?></h4>
                </td>
                <td scope="col">
                    <h2><a onclick="return delt('<?=$row['ten_khachhang']?>')" href="./category/xoa_khachhang.php?id=<?= $row['id'] ?>">Xóa</a></h2>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>