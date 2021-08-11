<table class="table align-middle table-bordered" style="width: 1200px; margin: 10px auto; ">
    <thead class="table-light">
        <tr>
            <th scope="col">
                <h2>Id</h2>
            </th>
            <th scope="col">
                <h2>Tên</h2>
            </th>
            <th scope="col">
                <h2>Email</h2>
            </th>
            <th scope="col">
                <h2>Pass</h2>
            </th>
            <th scope="col">
                <h2>Phân quyền</h2>
            </th>
            <th scope="col">
                <h2>Xóa</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM nhan_vien");
        while ($row = mysqli_fetch_array($data,1)) { ?>

            <tr>
                <td scope="col">
                    <h4><?= $row['id'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['ten'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['email'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['pass'] ?></h4>

                </td>
                <td scope="col">
                    <h4><?= $row['phan_quyen'] ?></h4>
                </td>
                <td scope="col">
                    <h2><a onclick="return delt('<?= $row['ten'] ?>')" href="./category/xoa_nhanvien.php?id=<?= $row['id'] ?>">Xóa</a></h2>
                </td>
            </tr>
        <?php } ?>
        <button class="btn-primary btn"><a href="./category/them_nhanvien.php">Thêm</a></button>
    </tbody>
</table>