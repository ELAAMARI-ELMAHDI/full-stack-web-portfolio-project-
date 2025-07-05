<?php
session_start();

?>
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
    <header class="header">
        <div class="container">
        <div class="logo"><img class="logoo" src="<?php if (isset($_SESSION['image'])) {echo $_SESSION['image'];} ?>" alt=""><h7 class="name" style="color: white;text-decoration:underline red;margin-top:15px;margin-left:5px;"><?php if (isset($_SESSION['name'])) {echo "welcome  ", $_SESSION['name'];}?></h7></div>

        <div class="navr">

            <li><a href="index2.php" class="active link">Home</a></li>
            <li><a href="about2.php" class="link">About</a></li>
            <li><a href="skills2.php" class="link">Skills</a></li>
            <li><a href="services2.php" class="link">Services</a></li>
            <li><a href="project2.php" class="link">Project</a></li>
           
            
            <div class="dropdown">
                <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.linkedin.com/in/elaamari-elmahdi-69a722327/" target="-blank" style="text-decoration: underline;">LinkedIn</a></li>
                  <li><a class="dropdown-item" href="https://www.linkedin.com/in/elaamari-elmahdi-69a722327/" target="-blank" style="text-decoration: underline;">Instagram</a></li>
                 
                </ul>
              </div>
              <li><a href="contact2.php" class="link">Contact</a></li>
              <a class="Deco" href="deco.php" >Deconnextion</a>

        </div>
        </div>
    </header>


<div class="About pd-y" id="servic">
    <div class="container">
        <div class="intro">
            <h1 class="int-title">My Services!</h1>
            <span class="int-line"></span>
        </div>
        
        

    </div>

</div>

<div class="container" style="margin-left: 80px;"> 
         <form  action="search.php" method="post" style="margin-bottom: 30px;">
          <input name="search" class="input input-control " style="width: 200px;height:40px;" type="text">
          <button class="btn btn-outline-danger mb-2">Search</button>
        </form>
    </div>

<div class="container">

    <div class="menu-items">
  
  
       
<?php
include 'cnx.php';

$ops=$db->query("SELECT * FROM service")->fetchAll();
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


<div class="pd-y" id="#">
<div class="container">
    <div class="intro">
        <h1 class="int-title">Why choose us!</h1>
        <span class="int-line"></span>
    </div>
    
    

</div>

</div>


<div class="servic1 pd-y container" id="serv">

<div class="content container">
          <h3 class="desc">Why Choose Us for Your Digital Development Needs. </h3><br>
       
    <ol class="servic-list">
        <li>Custom Solutions, Tailored to You We craft unique digital experiences that align perfectly with your brand and goals</li><br>
        <li>Cutting-Edge Technology – We use the latest tools and frameworks to deliver fast, secure, and scalable solutions.</li><br>
        <li>End-to-End Support – From idea to launch (and beyond), we’re with you every step of the way.</li><br>
        <li>Proven Track Record – Trusted by startups and enterprises alike for delivering on time and on budget.</li><br>
        <li>Human-Centered Design – We prioritize user experience to ensure your digital product is not just functional, but loved.</li>
        
    </ol>
    </div>


    <div class="servic-item1  container">     
        
        <div class="servic-item-img ">
            <img style="border-radius: 15%;" src="about2.jpg"  alt="">
            
        </div>
       
        
           <ul class="servic-bollets">
               <li></li>
               <li></li>
               <li></li>
           </ul>

    </div>
    <div class="clear"></div>
</div>  <br><br><br><br>



<div class="numbers">
<div class="overlay">
    <div class="container">
      
    </div>
</div>
</div>




  


<script src="popper.min.js"></script>
<script src="jquery-3.7.1.js"></script>
<script src="bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>