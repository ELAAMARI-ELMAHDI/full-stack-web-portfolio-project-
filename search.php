<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>


<div class="container">

    <div class="menu-items">
<?php 
include 'cnx.php';
session_start();
$search=$_POST['search'];
$ops=$db->query("SELECT * FROM service WHERE title LIKE '%$search%' OR description LIKE '%$search%' ")->fetchAll();

foreach($ops as $op) {
    
    echo '<div class="menu-item">';
    echo '<img src=" '.$op['image_path'].'" class="phs" alt="">';
    echo '<h3>'.$op['title'].'</h3>';
    echo '<p>'.$op['description'].'</p>';
    echo '<button class="price btn btn-danger">'.$op['prix'].'</button>';
  echo '</div>';
 }


 ?>
     </div>
</div>



</body>
</html>
