<?php
include 'cnx.php';
if (isset($_GET['Id'])){
$id=$_GET['Id'];
$op=$db->query("DELETE FROM service WHERE Id='$id' ;");
header("location:servTab.php");
}
?>