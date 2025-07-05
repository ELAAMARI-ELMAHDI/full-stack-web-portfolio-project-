<?php
    include'cnx.php';
  
if (isset($_GET['Id'])){
    $id=$_GET['Id'];
    $op=$db->query("SELECT * FROM login WHERE Id='$id' ;")->fetch();
  
    }
?>

<fieldset>
        <legend>USERS :</legend>
 <form action="" method="post">
    <label> Full name:</label>
    <input name="nom" type="text" value="<?php echo $op['Full_name'] ?>">
    <br><br>
    <label> Email :</label>
    <input name="age" type="text" value="<?php echo $op['Email'] ?>">  
    <br><br>
    <label> image :</label>
    <input name="add" type="file" value="<?php  $op['image_path'] ?>">
    <br><br>
    <label>  Password:</label>
    <input name="sal" type="password" value="<?php echo $op['Password'] ?>">
    <br>
    <button type="submit">SEND</button>
 </form>
    </fieldset>

    <?php

if(isset($_POST['nom'])&& isset($_POST['age'])&& isset($_POST['add'])&& isset($_POST['sal'])){
    $nom = $_POST['nom'];
    $age= $_POST['age'];
    $add= $_POST['add'];
    $sal=$_POST['sal'];
    $op= $db->query("UPDATE login SET Full_name ='$nom' , Email='$age' , Image_path ='$add',Password ='$sal' WHERE  Id = $id;");
    header("location:user.php");
    
}


?>