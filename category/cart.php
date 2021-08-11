<?php
if (!isset($_SESSION["cart"])) {
    $_SESSION['cart'] = [];
}
if (isset($_POST['mua'])) {
    $ten = $_POST['ten'];
    $ma = $_POST['ma'];
    $gia = $_POST['gia'];
    $img = $_POST['img'];
    $id = $_POST['id'];
    $so_luong = $_POST['so_luong'];
    $sp = [
        $ten,
        $img,
        $so_luong,
        $gia,
        $id,
        $ma,
    ];
    $_SESSION['cart'][] = $sp;
    // echo "<pre>";
    // var_dump($_SESSION['cart']);
    // die;
}
//  unset($_SESSION['cart']);die;
?>
<table id="carts" style="width: 980px; margin: 10px auto; font-size: 2em;" class="table-bordered table align-middle">
    <thead>
        <tr>
            <th border="1">Id</th>
            <th border="1">Tên sản phẩm</th>
            <th border="1" style="width: 200px;">Ảnh</th>
            <th border="1">Số lượng</th>
            <th border="1">Giá</th>
            <th border="1">Thành tiền</th>
            <th border="1">
                <a onclick="return delt('tất cả')" href="./category/xoa.php">Xóa</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_SESSION['cart']) && (is_array($_SESSION['cart']))) {
            $total = 0;
            for ($i = 0; $i < count($_SESSION['cart']); $i++) {

        ?>
                <tr>
                    <form action="http://localhost/web_ban_hang/index.php?page=hoadon#hdon" method="post">
                        <td><?= $i + 1 ?></td>
                        <td><?= $_SESSION['cart'][$i][0] ?>
                            <input type="hidden" name="ten_sp" value="<?= $_SESSION['cart'][$i][0] ?>">
                            <input type="hidden" name="id_sp" value="<?= $_SESSION['cart'][$i][4] ?>">
                        </td>
                        <td>
                            <div class="imgBox" style="width: 130px;">
                                <img src="./img/<?= $_SESSION['cart'][$i][1] ?>" width="100%" alt="">
                            </div>
                        </td>
                        <td><input type="number" name="so_luong" style="width: 100px;" value="<?= $_SESSION['cart'][$i][2] ?>">

                        </td>
                        <td>
                            <?= number_format($_SESSION['cart'][$i][3], 0, '', '.') ?>
                            <input type="hidden" name="gia" value="<?= $_SESSION['cart'][$i][3] ?> ">
                            <input type="hidden" name="ma" value="<?= $_SESSION['cart'][$i][5] ?> ">
                        </td>
                        <td>
                            <?= number_format($_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][2], 0, '', '.') ?>
                        </td>
                        <td>
                            <a onclick="return delt('<?= $_SESSION['cart'][$i][0] ?>')" href="./category/xoa.php">Xóa</a>
                        </td>
                </tr>
                <?php
                $total += $_SESSION['cart'][$i][3] * $_SESSION['cart'][$i][2] ?>
        <?php
            }
        }
        ?>
    <tfoot>
        <tr>
            <th colspan="5">
                <h3>
                    Tồng tiền
                </h3>
            </th>
            <th>
               <input style="color: red;" value="<?php echo number_format($total, 0, '', '.') ?>"  alt="">
              <input type="hidden" name="tong_tien" value="<?php echo $total?>" id="">
            </th>
            <th>
                <input type="submit" <?php if (!isset($_SESSION['email'])) {
                                            echo "onclick='return alertss()'";
                                        } ?> name="capnhat" class="btn" value="Cập nhật" />
            </th>
        </tr>
    </tfoot>
</table>

</form>
</tbody>