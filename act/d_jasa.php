<?php
include '../libs/conn.php';

$id = $_GET['id'];
  

mysqli_query($mysqli,"
	DELETE FROM t_jasa where id='$id'");
header("location:../datajasa.php");

?>