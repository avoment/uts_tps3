<?php
include '../libs/conn.php';

$id = $_GET['id'];
  

mysqli_query($mysqli,"
	DELETE FROM t_masuk where id_trans='$id'");
header("location:../datamasuk.php");

?>