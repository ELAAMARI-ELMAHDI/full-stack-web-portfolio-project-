<?php
    include'cnx.php';
  
if (isset($_GET['Id'])){
    $id=$_GET['Id'];
    $op=$db->query("SELECT * FROM admin WHERE Id='$id' ;")->fetch();
  
    }
    ?>

<fieldset>
        <legend>Admins :</legend>
 <form action="" method="post">
    <label> Full name:</label>
    <input name="nom" type="text" value="<?php echo $op['Full_name'] ?>">
    <br><br>
    <label> Email :</label>
    <input name="age" type="email" value="<?php echo $op['Email'] ?>">  
    <br><br>
    <label> Experience :</label>
    <input name="add" type="text" value="<?php echo $op['Experience'] ?>">
    <br><br>
    <label> image :</label>
    <input name="pat" type="file" value="<?php  $op['Image-path'] ?>">
    <br><br>
    <label>  Password:</label>
    <input name="sal" type="password" value="<?php echo $op['Password'] ?>">
    <br>
    <button type="submit">SEND</button>
 </form>
    </fieldset>

    <?php

if(isset($_POST['nom'])&& isset($_POST['age'])&& isset($_POST['add'])&& isset($_POST['sal'])&& isset($_POST['pat'])){
    $nom = $_POST['nom'];
    $age= $_POST['age'];
    $add= $_POST['add'];
    $pat= $_POST['pat'];
    $sal=$_POST['sal'];
    $op= $db->query("UPDATE admin SET Full_name ='$nom' , Email='$age' , Experience ='$add',Image_path ='$pat',Password ='$sal' WHERE  Id = $id;");
    header("location:adminTAB.php");
    
}