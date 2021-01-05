<?php
include '../libs/conn.php';
//$mysqli = new mysqli("localhost","root","","dd_promnet");

$Id = $_POST['id_trans'];
$Tgl = $_POST['tgl'];
$Nama = $_POST['nama_cus'];
$Jasa = $_POST['jasa'];
$Berat = $_POST['berat'];
$Total = $_POST['total'];


mysqli_query($mysqli, " 
	INSERT INTO t_masuk SET id_trans='".$Id."', tgl_masuk='".$Tgl."', nama='".$Nama."', jasa='".$Jasa."', berat='".$Berat."', total='".$Total."', status='Dalam Proses'
	");
header("location:../datamasuk.php");

?>