<?php
include '../libs/conn.php';

$Id = $_POST['id'];
$Nama = $_POST['nama'];
$Sabun = $_POST['sabun'];
$Softener = $_POST['softener'];
$Parfum = $_POST['parfum'];
$Harga = $_POST['harga'];

mysqli_query($mysqli,"
	UPDATE t_jasa SET id='".$Id."', nama='".$Nama."', sabun='".$Sabun."', softener='".$Softener."', parfum='".$Parfum."', harga='".$Harga."' where id='".$_POST['id']."' or nama='".$_POST['nama']."'");
header("location:../datajasa.php");

?>