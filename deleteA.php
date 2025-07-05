<?php
include 'cnx.php';
if (isset($_GET['Id'])){
$id=$_GET['Id'];
$op=$db->query("DELETE FROM admin WHERE Id='$id' ;");
header("location:adminTAB.php");
}
?>