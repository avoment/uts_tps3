<?php
include '../libs/conn.php';

$Sabun = $_POST['sabun'];
$Softener = $_POST['softener'];
$Parfum = $_POST['parfum'];


mysqli_query($mysqli,"
	UPDATE t_sabun SET  sabun='".$Sabun."', softener='".$Softener."', parfum='".$Parfum."' where sabun='".$_POST['sabun']."' or softener='".$_POST['softener']."' or parfum='".$_POST['parfum']."'");
header("location:../datasabun.php");

?>