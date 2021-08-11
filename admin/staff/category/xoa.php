<?php
require_once './../../db/conn.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    function xoa($names=false)
    {
        // var_dump($names);die;
        global $conn;
        global $id;
        $sql = "DELETE FROM $names WHERE id = $id";
        mysqli_query($conn, $sql);
        return true;
    }

  
}
