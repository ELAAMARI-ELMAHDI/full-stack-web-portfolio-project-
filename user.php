<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body style="width: 100%;">
    <style>
       table {
        width: 100%;
        margin-left: 30px;
        border-collapse: collapse;
        background-color: #222;
      }
  
      th, td {
        padding: 12px;
        border: 1px solid #333;
        color: #fff;
        text-align: center;
      }
  
      th {
        background-color: #e63946;
        color: #fff;
      }
  
      tr:nth-child(even) {
        background-color: #1a1a1a;
      }
      
      h2 {
        border-bottom: 2px solid #e63946;
        padding-bottom: 5px;
        width: 100%;
        margin-top: 40px;
        text-align: center;
        text-shadow: #e63946 2px 2px 5px;
      }
   </style>
<?php
include 'cnx.php';

$ops=$db->query("SELECT * FROM login")->fetchAll();

echo "<h1 style='color:red;'><h2>Users:</h2><br><br>";

echo" <table   border='1'  >";
 echo "<tr>
        <th>Id</th>
        <th>Full-name</th>
        <th>Email</th>
        <th>Image-name</th>
        <th>Image-path</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>";



foreach($ops as $op) {
    echo '<tr>';
    echo '<td>'.$op['Id'].'</td>';
    echo '<td>'.$op['Full_name'].'</td>';
    echo '<td>'.$op['Email'].'</td>';
    echo '<td>'.$op['image_name'].'</td>';
    echo '<td>'.$op['image_path'].'</td>';
    echo '<td>'.$op['Password'].'</td>';
    echo '<td>'.'<a href="updateU.php?Id='.$op['Id'].'">update</a>'.'</td>';
    echo '<td>'.'<a href="deleteU.php?Id='.$op['Id'].'">delete</a>'.'</td>';
    echo '</tr>';
}
?>
    
</body>
</html>