<?php
include '../libs/conn.php';

$Id = $_POST['id_trans'];
$Tgl = $_POST['tgl_masuk'];
$Nama = $_POST['nama_cus'];

$Berat = $_POST['berat'];
$Total = $_POST['total'];

mysqli_query($mysqli,"
	UPDATE t_masuk SET id_trans='".$Id."', tgl_masuk='".$Tgl."', nama='".$Nama."', berat='".$Berat."', total='".$Total."' where id_trans='".$_POST['id_trans']."' or nama='".$_POST['nama_cus']."'");
header("location:../datamasuk.php");

?>