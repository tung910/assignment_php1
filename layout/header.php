<!-- header section starts  -->
<header>
    <div class="header-1">
        <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>TMDT</a>
        <form action="http://localhost/web_ban_hang/index.php" method="GET" class="search-box-container">
            <input  type="text" required="true" name="search" id="search-box" placeholder="Nhập mã hóa đơn ">
            <?php
            if (isset($_SESSION['email'])) {
            ?>
                <button style="position: relative;" name="page" class="fas fa-search" value="kiemtra"></button>
            <?php  } else { ?>
                <button style="opacity: 0.4; cursor: default;" alt="Đăng nhập để sử dụng" require="true" style="position: relative;"  disabled name="page" class="fas fa-search" value="kiemtra"></button>
            <?php
            }
            ?>
        </form>
    </div>
    <div class="header-2">
        <div id="menu-bar" class="fas fa-bars">
        </div>
        <nav class="navbar">
            <a href="http://localhost/web_ban_hang/index.php">Trang chủ</a>
            <div class="submenu">
                <a href="?page=tatcasanpham">Sản phẩm</a>
                <div class="dropdown-content">
                    <a href="?page=laptop" style="font-size: 1.7em;">Laptop</a>
                    <a href="?page=phone" style="font-size: 1.7em;">Điện thoại</a>
                    <a href="?page=phukien" style="font-size: 1.7em;">Phụ kiện</a>
                </div>
            </div>
            <a href="?page=tintuc">Tin tức</a>
            <a href="?page=lienhe">Liên hệ</a>
            <!-- <a href="#contact">contact</a> -->
        </nav>
        <div class="icons">
        <!-- <a href="?page=dsythich" class="fa fa-heart fa-2x" aria-hidden="true"></a> -->
            <a href="?page=giohang" class="fas fa-2x fa-shopping-cart"></a>
            <a href="./admin/auth/dangnhaps.php" class="fas fa fa-3x fa-sign-in" alt="Đăng nhập"></a>
            <?php if (isset($_SESSION['email'])) { ?><a href="http://localhost/web_ban_hang/admin/auth/logout.php" class="fas fa fa-sign-out"></a> <?php } ?>
            <div class="submenu">
                <a href="./admin/loginAdmin_id.php" class="fas fa-user-circle"></a>
                <div class="dropdown-content">
                    <a href="./admin/login_nvv.php" style="font-size: 1.7em; ">Nhân viên</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- </section> -->
    <div>
        <img src="./img/slide1.jpg" alt="">
    </div>
    <!-- home section ends -->
</header>