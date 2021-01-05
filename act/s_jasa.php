<?php
include '../libs/conn.php';
//$mysqli = new mysqli("localhost","root","","dd_promnet");

$Id = $_POST['id'];
$Nama = $_POST['nama'];
$Sabun = $_POST['sabun'];
$Softener = $_POST['softener'];
$Parfum = $_POST['parfum'];
$Harga = $_POST['harga'];


mysqli_query($mysqli, "
	INSERT INTO t_jasa SET id='".$Id."', nama='".$Nama."', sabun='".$Sabun."', softener='".$Softener."', parfum='".$Parfum."', harga='".$Harga."'");
header("location:../datajasa.php");

?>