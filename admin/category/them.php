  <?php
  session_start();
  require_once './../../db/conn.php';
  if (isset($_POST['add'])) {
    if (
      (isset($_POST['ten']) &&
        isset($_POST['email']) &&
        isset($_POST['pass']) &&
        isset($_POST['phan_quyen'])) &&
      (!empty($_POST['ten']) &&
        !empty($_POST['email']) &&
        !empty($_POST['pass']) &&
        !empty($_POST['phan_quyen']))
    ) {
      $ten = $_POST['ten'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $phan_quyen = $_POST['phan_quyen'];
      $pass = md5($pass);
      $sql = "INSERT INTO nhan_vien(ten,email,pass,phan_quyen)" . "
      VALUES('$ten','$email','$pass','$phan_quyen')
      ";
      $query = mysqli_query($conn, $sql);
      if ($query == true) {
        header('location: http://localhost/web_ban_hang/admin/index.php?page=nhanvien');
        die;
      }
    } else {
      $_SESSION['err'] = "Không để trống";
      header('location: http://localhost/web_ban_hang/admin/category/them_nhanvien.php');
      die;
    }
  }
