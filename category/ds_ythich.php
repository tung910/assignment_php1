
<!-- product section starts  -->
<section class="product" id="product">

    <h1 class="heading">Tất cả <span>phụ kiện</span></h1>

    <div class="box-container">
        <?php
        while ($row = mysqli_fetch_array($datas)) { ?>
            <div class="box">
                <!-- <span class="discount">-33%</span> -->
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="img" style="width: 200px; margin-left: 50px; height: 158px">
                    <a href="?page=chitiet&id=<?= $row['id'] ?>"> <img src="./img/<?= $row['img'] ?>" alt=""></a>
                </div>
                <h3 style="margin-top: 3em;"><?= $row['ten'] ?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <form action="http://localhost/web_ban_hang/index.php?page=giohang&id=<?= $row['id'] ?>" align="center" method="post">
                    <div class="price"><?= number_format($row['gia'], 0, '', '.') ?> </div>
                    <div class="quantity">
                        <span>số lượng : </span>
                        <input type="number" name="so_luong" min="1" max="1000" value="1">
                    </div>
                    <input type="submit" class="btn" name="mua" value="Mua ngay">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="ten" value="<?= $row['ten'] ?>">
                    <input type="hidden" name="ma" value="<?= $row['ma'] ?>">
                    <input type="hidden" name="gia" value="<?= $row['gia'] ?>">
                    <input type="hidden" name="img" value="<?= $row['img'] ?>">

                </form>
            </div>
        <?php } ?>

    </div>

</section>

<!-- product section ends -->