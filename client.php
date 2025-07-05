<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
    <style>
       table {
        width: 90%;
        margin-left: 100px;
        border-collapse: collapse;
        margin: 20px 0;
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
        margin-top: 40px;
        text-align: center;
        text-shadow: #e63946 2px 2px 5px;
      }
   </style>
<?php
include 'cnx.php';

$ops=$db->query("SELECT * FROM contact")->fetchAll();

echo "<h1 style='color:red;'><h2>Clients:</h2><br><br>";

echo" <table style='margin-left:5%;'  border='1'  >";
 echo "<tr>
        <th>Id</th>
        <th>Addresse</th>
         <th>Email</th>
        <th>Number</th>
        <th>Service</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>";



foreach($ops as $op) {
    echo '<tr>';
    echo '<td>'.$op['Id'].'</td>';
    echo '<td>'.$op['Addresse'].'</td>';
    echo '<td>'.$op['Email'].'</td>';
    echo '<td>'.$op['Number'].'</td>';
    echo '<td>'.$op['Service'].'</td>';
    echo '<td>'.$op['Description'].'</td>';

    echo '<td>'.'<a href="updateC.php?Id='.$op['Id'].'">update</a>'.'</td>';
    echo '<td>'.'<a href="deleteC.php?Id='.$op['Id'].'">delete</a>'.'</td>';
    echo '</tr>';
}
?>
    
</body>
</html>