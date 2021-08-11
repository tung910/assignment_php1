<!-- footer second section -->
<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3" style="width: 1000px; margin: 30px auto;">
	<div class="col-md-4 offer-footer">
		<div class="row">
			<div class="col-4 icon-fot">
				<i class="fas fa-dolly fa-7x"></i>
			</div>
			<div class="col-8 text-form-footer">
				<h3>Miễn phí vận chuyển</h3>
				<p>Đơn hàng trên 100$</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 offer-footer my-md-0 my-4">
		<div class="row">
			<div class="col-4 icon-fot">
				<i class="fas fa-truck fa-7x"></i>
			</div>
			<div class="col-8 text-form-footer ">
				<h3>Vận chuyển nhanh</h3>
				<p>Toàn quốc</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 offer-footer">
		<div class="row">
			<div class="col-4 icon-fot">
				<i class="far fa-thumbs-up fa-7x"></i>
			</div>
			<div class="col-8 text-form-footer">
				<h3>Tin cậy</h3>
				<p>Sự đảm bảo</p>
			</div>
		</div>
	</div>
</div>
<!-- //footer second section -->
</div>
</div>

<!-- //footer third section -->

</footer>
<!-- //footer -->

<!-- contact section starts  -->

<section class="contact" id="contact">

	<h1 class="heading"> <span>Liên hệ</span> ngay</h1>

	<form action="#contact"  method="POST">
		<?php

		if (isset($_POST['gui'])) {
			if (
				!empty($_POST['ten']) &&
				!empty($_POST['email']) &&
				!empty($_POST['sdt']) &&
				!empty($_POST['mess'])
			) {
				echo "<h2 style='text-align: center; color: green;'>Cảm ơn bạn đã quan tâm!</h2>";
			}
			else{
				echo "<h2 style='text-align: center; color: green;'>Xin đừng bỏ trống!</h2>";

			}
		}
		?>

		<div class="inputBox">
			<input type="text" name="ten" placeholder="Tên">
			<input type="email" name="email" placeholder="email">
		</div>

		<div class="inputBox">
			<input type="number" name="sdt" placeholder="Số điện thoại">
			<input type="text" name="dv" placeholder="Dịch vụ cần hỗ trợ">
		</div>

		<textarea placeholder="message" name="mess" id="" cols="30" rows="10"></textarea>

		<input type="submit" name="gui" value="Gửi" class="btn">

	</form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container" style="justify-content: space-around;">

        <div class="box">
            <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>TDMD</a>

            <div class="share">
                <a href="#" class="btn fab fa-facebook-f"></a>
                <a href="#" class="btn fab fa-twitter"></a>
                <a href="#" class="btn fab fa-instagram"></a>
            </div>
        </div>
        
        <div class="box">
            <h3>Thông tin liên hệ</h3>
            <div class="links"  style="display: flex; flex-direction: column;">
                <a href="#">Đ/c: trịnh văn bô</a>
                <a href="#">SĐT: 012345678</a>
                <a href="#">email: tmdt@gmail.com</a>
                <a href="#">website: www.tdmt.com.vn</a>
            </div>
	</div>
        <div class="box">
            <h3>Menu</h3>
            <div class="links"  style="display: flex; flex-direction: column;">
                <a href="#">home</a>
                <a href="#">Danh mục</a>
                <a href="#">Tin tức</a>
                <a href="#">Liên hệ</a>
            </div>
        </div>

    </div>


</section>

<!-- footer section ends -->

<!-- //copyright -->