<?php
session_start();
unset($_SESSION['cart']);
header('location: http://localhost/web_ban_hang/index.php');