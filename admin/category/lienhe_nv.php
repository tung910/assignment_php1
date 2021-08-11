<?php


?>
<table class="table align-middle table-bordered" style="width: 1200px; margin: 10px auto; ">
    <thead class="table-light">
        <tr>
            <th scope="col">
                <h2>Id</h2>
            </th>
            <th scope="col">
                <h2>Tên khách hàng</h2>
            </th>
            <th scope="col" style="width: 200px;">
                <h2>Email</h2>
            </th>
            <th scope="col" style="width: 250px;">
                <h2>Số điện thoại</h2>
            </th>
            <th scope="col">
                <h2>Dịch vụ</h2>
            </th>
            <th scope="col">
                <h2>Nội dung</h2>
            </th>
            <th scope="col">
                <h2>Trạng thái</h2>
            </th>
            <th scope="col">
                <h2>Phản hồi</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM lien_he");
        while ($row = mysqli_fetch_array($data)) { ?>

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
                    <h4><?= $row['sdt'] ?></h4>
                </td>
                <td scope="col">
                    <h4><?= $row['dich_vu'] ?></h4>
                </td>
                <td scope="col" style="overflow: hidden;">
                    <h4><?= $row['noi_dung'] ?></h4>
                </td>
                <td scope="col">
                    <h4 style="color: red;">mới</h4>
                </td>
                <td scope="col">
                    <h4><a href="">Phản hồi</a></h4>
                </td>
            </tr>
        <?php } ?>
        <!-- <button class="btn-primary btn"><a href="./manage/add_ad.php">Thêm</a></button> -->
    </tbody>
</table>