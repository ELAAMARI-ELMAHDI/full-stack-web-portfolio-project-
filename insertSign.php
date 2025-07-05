<?php
include 'cnx.php'; 
session_start();


if(isset($_POST['email']) and isset($_POST['psw'])){


    
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $encry = crypt($psw,'encrypt');
   
    $x = $db ->query("SELECT * FROM login WHERE Email='$email' AND Password='$encry'")->fetchAll();
    $y = $db ->query("SELECT * FROM admin WHERE Email='$email' AND Password='$encry'")->fetchAll();

    if(!empty($x)){
      $m = $db ->query("SELECT * FROM login WHERE Email='$email' AND Password='$encry'")->fetch();
          session_start() ;  
          $_SESSION['name']=$m['Full_name'];
          $_SESSION['image']=$m['image_path'];
        
          header("location:about2.php");
     
    }
  
    else if(!empty($y)){
      $n = $db ->query("SELECT * FROM admin WHERE Email='$email' AND Password='$encry'")->fetch();
          session_start() ;  
          $_SESSION['name']=$n['Full_name'];
          $_SESSION['image']=$n['image_path'];
        
          header("location:admin.php");
     
    }else{

    
    
        
      echo '  <p style="color: red;margin-left:460px;font-size:20px;">Password or email is incorrocet!!!</p><br><br>  ';
      echo '<button style="background-color:red;border-radius :5px;padding:8px;margin-left:580px;"><a style="color:white;" href="login.php">try again</a></button>';
     
    }
  };    
     

?>