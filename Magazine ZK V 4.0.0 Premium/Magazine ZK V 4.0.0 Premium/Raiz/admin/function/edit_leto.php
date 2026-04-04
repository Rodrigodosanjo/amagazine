<?php 
ob_start();
session_start();
if(isset($_SESSION['nome_a']))
	{





require_once ("config.php");
require_once ("conexao.php");

error_reporting(0);
ini_set(“display_errors”, 0 );


$n1 =  addslashes($_POST["n1"]);
$n2 =  addslashes($_POST["n2"]);
$n3 =  addslashes($_POST["n3"]);
$n4 =  addslashes($_POST["n4"]);
$n5 =  addslashes($_POST["n5"]);
$n6 =  addslashes($_POST["n6"]);
$n7 =  addslashes($_POST["n7"]);
$n8 =  addslashes($_POST["n8"]);
$n9 =  addslashes($_POST["n9"]);
$n10 =  addslashes($_POST["n10"]);
$n11 =  addslashes($_POST["n11"]);
$n12 =  addslashes($_POST["n12"]);
$n13 =  addslashes($_POST["n13"]);
$n14 =  addslashes($_POST["n14"]);
$n15 =  addslashes($_POST["n15"]);

$id_1 =  addslashes($_POST["id_1"]);
$id_2 =  addslashes($_POST["id_2"]);
$id_3 =  addslashes($_POST["id_3"]);
$id_4 =  addslashes($_POST["id_4"]);
$id_5 =  addslashes($_POST["id_5"]);
$id_6 =  addslashes($_POST["id_6"]);
$id_7 =  addslashes($_POST["id_7"]);
$id_8 =  addslashes($_POST["id_8"]);
$id_9 =  addslashes($_POST["id_9"]);
$id_10 =  addslashes($_POST["id_10"]);
$id_11 =  addslashes($_POST["id_11"]);
$id_12 =  addslashes($_POST["id_12"]);
$id_13 =  addslashes($_POST["id_13"]);
$id_14 =  addslashes($_POST["id_14"]);
$id_15 =  addslashes($_POST["id_15"]);

$ID =  addslashes($_POST["id"]);
	




$sql1 = "Update boletos SET numero='$n1' where id='$id_1' " ;
$query = $mysqli->query($sql1);

$sql2 = "Update boletos SET numero='$n2' where id='$id_2' " ;
$query = $mysqli->query($sql2);

$sql3 = "Update boletos SET numero='$n3' where id='$id_3' " ;
$query = $mysqli->query($sql3);

$sql4 = "Update boletos SET numero='$n4' where id='$id_4' " ;
$query = $mysqli->query($sql4);

$sql5 = "Update boletos SET numero='$n5' where id='$id_5' " ;
$query = $mysqli->query($sql5);

$sql6 = "Update boletos SET numero='$n6' where id='$id_6' " ;
$query = $mysqli->query($sql6);

$sql7 = "Update boletos SET numero='$n7' where id='$id_7' " ;
$query = $mysqli->query($sql7);

$sql8 = "Update boletos SET numero='$n8' where id='$id_8' " ;
$query = $mysqli->query($sql8);

$sql9 = "Update boletos SET numero='$n9' where id='$id_9' " ;
$query = $mysqli->query($sql9);

$sql10 = "Update boletos SET numero='$n10' where id='$id_10' " ;
$query = $mysqli->query($sql10);

$sql11 = "Update boletos SET numero='$n11' where id='$id_11' " ;
$query = $mysqli->query($sql11);

$sql12 = "Update boletos SET numero='$n12' where id='$id_12' " ;
$query = $mysqli->query($sql12);

$sql13 = "Update boletos SET numero='$n13' where id='$id_13' " ;
$query = $mysqli->query($sql13);

$sql14 = "Update boletos SET numero='$n14' where id='$id_14' " ;
$query = $mysqli->query($sql14);

$sql15 = "Update boletos SET numero='$n15' where id='$id_15' " ;
$query = $mysqli->query($sql15);




  if(!$query)
    die (header("Location: ../editar.php?id=$ID&leto=2"));
  else
    echo (header("Location: ../editar.php?id=$ID&leto=1"));

	
	


?>    


