<?php
    include'cnx.php';
  
if (isset($_GET['Id'])){
    $id=$_GET['Id'];
    $op=$db->query("SELECT * FROM service WHERE Id='$id' ;")->fetch();
  
    }
    ?>

<fieldset>
        <legend>Services :</legend>
 <form action="" method="post">
    <label> Image :</label>
    <input name="add" type="file" value="<?php echo $op['image_path'] ?>">
    <br><br>
    <label for="">Title</label>
    <input name="nom" type="text" value="<?php echo $op['title'] ?>">
    <br><br>
    <label> Description :</label>
    <input name="age" type="text" value="<?php echo $op['description'] ?>">  
    <br><br>
    <label> Prix :</label>
    <input name="sal" type="text" value="<?php echo $op['prix'] ?>">
    <br><br>
 
    <button type="submit">SEND</button>
 </form>
    </fieldset>

    <?php

if(isset($_POST['nom'])&& isset($_POST['age'])&& isset($_POST['add'])&& isset($_POST['sal'])){
    $nom = $_POST['nom'];
    $age= $_POST['age'];
    $add= $_POST['add'];
    $sal=$_POST['sal'];
    $op= $db->query("UPDATE service SET title ='$nom' , Description='$age' , image_path ='$add',prix ='$sal' WHERE  Id = $id;");
    header("location:servTab.php");
    
}



?>