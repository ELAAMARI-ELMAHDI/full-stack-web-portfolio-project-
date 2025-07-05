<?php 
include 'cnx.php';

$Add=$_POST['Add'] ;
$Number= $_POST['Number'] ?? '';
$Serv = $_POST['Serv'];
$Desc = $_POST['Desc'];
$Ema = $_POST['ema'];

$db->exec("INSERT INTO contact (Addresse,Email,Number,Service,Description)  values('$Add','$Ema','$Number','$Serv','$Desc')");
echo '  <p style="color: green;margin-left:300px;font-size:20px;margin-top :300px;">Thanks you! for requesting our services.We will contact you soon.</p><br><br>  ';



?>