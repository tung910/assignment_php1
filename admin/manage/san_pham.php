<?php

?>
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
                <h2>Tên sản phẩm</h2>
            </th>
            <th scope="col" style="width: 250px;">
                <h2>Ảnh</h2>
            </th>
            <th scope="col">
                <h2>Số lượng</h2>
            </th>
            <th scope="col">
                <h2>Giá</h2>
            </th>
            <th scope="col" style="width: 250px; height: 100px;">
                <h2>Nội dung</h2>
            </th>
            <th scope="col">
                <h2>Phân loại</h2>
            </th>
            <th scope="col">
                <h2>Cập nhật</h2>
            </th>
            <th scope="col">
                <h2>Xóa</h2>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($conn, "SELECT * FROM san_pham");
        while ($row = mysqli_fetch_array($data)) { ?>

            <tr>
                <td scope="col">
                    <h4><?=$row['id']?></h4>
                </td>
                <td scope="col">
                    <h4><?=$row['ma']?></h4>
                </td>
                <td scope="col">
                    <h4><?=$row['ten']?></h4>
                </td>
                <td scope="col">
                    <div class="boximg">
                        <img src="./../img/<?=$row['img']?>" alt="">
                    </div>
                </td>
                <td scope="col">
                    <h4><?=$row['so_luong']?></h4>
                </td>
                <td scope="col">
                    <h4><?=$row['gia']?></h4>
                </td>
                <td scope="col" style="overflow: hidden;">
                    <h4><?=$row['noi_dung']?></h4>
                </td>
                <td scope="col">
                    <h4><?=$row['ma_ploai']?></h4>
                </td>
                <td scope="col">
                    <h2><a href="./manage/capnhat.php?id=<?=$row['id']?>">Cập nhật</a></h2>
                </td>
                <td scope="col">
                    <h2><a onclick="return delt('<?=$row['ten']?>')" href="./manage/delete.php?id=<?=$row['id']?>">Xóa</a></h2>
                </td>
            </tr>
        <?php } ?>
        <button class="btn-primary btn"><a href="./manage/add_ad.php">Thêm</a></button>
    </tbody>
</table>
 