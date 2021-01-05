<?php
include '../libs/conn.php';

$id = $_GET['id'];


mysqli_query($mysqli,"
	UPDATE t_masuk SET status='Sudah Diambil' where id_trans='$id'");
header("location:../datamasuk.php");

?>