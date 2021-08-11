<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    // var_dump($id);
    $data = mysqli_query($conn, "SELECT * FROM san_pham WHERE id = $id");
    // echo'<pre>';
    // var_dump($data);die;
}
?>
<!-- home section starts  -->

<section class="home" id="home">
    <?php
    while ($item = mysqli_fetch_array($data)) {
    ?>
        <div class="image">
            <img src="./img/<?= $item['img'] ?>" alt="">
        </div>

        <div class="content">
            <h1 style="font-size: 4em;"><?= $item['ten'] ?></h1>
            <p style="font-size: 15px;">
                <?= $item['noi_dung'] ?>
            </p>
            <form action="http://localhost/web_ban_hang/index.php?page=giohang" method="post">
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <input type="hidden" name="img" value="<?= $item['img'] ?>">

                <input type="hidden" name="ma" value="<?= $item['ma'] ?>">

                <input type="hidden" name="ten" value="<?= $item['ten'] ?>">

                <input type="number" style=" font-size: 2em; border: 1px solid black;" name="so_luong" value="1" size="3">

                <input type="hidden" name="gia" value="<?= $item['gia'] ?>">

                <input type="hidden" name="ma_ploai" value="<?= $item['ma_ploai'] ?>">
                <br>
                <button name="mua" class="btn">Mua</button>
            </form>
        </div>
    <?php } ?>
</section>

<!-- home section ends -->