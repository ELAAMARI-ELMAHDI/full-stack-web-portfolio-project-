<?php
    include'cnx.php';
  
if (isset($_GET['Id'])){
    $id=$_GET['Id'];
    $op=$db->query("SELECT * FROM contact WHERE Id='$id' ;")->fetch();
  
    }
    ?>

<fieldset>
        <legend>Clients :</legend>
 <form action="" method="post">
    <label> Addresse:</label>
    <input name="nom" type="text" value="<?php echo $op['Addresse'] ?>">
    <br><br>
    <label> Number :</label>
    <input name="age" type="number" value="<?php echo $op['Number'] ?>">  
    <br><br>
    <label> Service :</label>
    <input name="add" type="text" value="<?php echo $op['Service'] ?>">
    <br><br>
    <label>  Description:</label>
    <input name="sal" type="text" value="<?php echo $op['Description'] ?>">
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
    $op= $db->query("UPDATE contact SET Addresse ='$nom' , Number='$age' , Service ='$add',Description ='$sal' WHERE  Id = $id;");
    header("location:client.php");
    
}



?>