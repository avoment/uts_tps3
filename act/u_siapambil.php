<?php
include '../libs/conn.php';

$id = $_GET['id'];


mysqli_query($mysqli,"
	UPDATE t_masuk SET status='Siap Ambil' where id_trans='$id'");
header("location:../datamasuk.php");

?>