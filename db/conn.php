<?php
$conn = mysqli_connect('localhost','root','','w2013');
if(!$conn){
    die('error'. mysqli_connect_error($conn));
}