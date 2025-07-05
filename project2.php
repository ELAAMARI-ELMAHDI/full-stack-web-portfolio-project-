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

       
    <div class="pd-y" id="project">
        <div class="container">
            <div class="intro">
                <h1 class="int-title">My Projects!</h1>
                <span class="int-line"></span>
            </div>
            
            

        </div>

    </div>

    <div  class="container proj " >
        

       
    <div class="servic-content">

      <div class="servic-item ltr-effect">
          <i class="fa fa-cogs"></i>
          <h2 class="servic-item-title">fully custom</h2>
          <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                                     JIJIWEpkEOKDPSAEJKPESAK</p>
          <a href="#" class=".link">read more</a>
     </div>
  
     <div class="servic-item ltr-effect mg" >
      <i class="fa fa-cogs"></i>
      <h2 class="servic-item-title">fully custom</h2>
      <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                                 JIJIWEpkEOKDPSAEJKPESAK</p>
      <a href="#" class=".link">read more</a>
  </div>
  
  <div class="servic-item ltr-effect">
  <i class="fa fa-cogs"></i>
  <h2 class="servic-item-title">fully custom</h2>
  <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                             JIJIWEpkEOKDPSAEJKPESAK</p>
  <a href="#" class=".link">read more</a>
  </div>
  
  <div class="servic-item ltr-effect ">
  <i class="fa fa-cogs"></i>
  <h2 class="servic-item-title">fully custom</h2>
  <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                             JIJIWEpkEOKDPSAEJKPESAK</p>
  <a href="#" class=".link">read more</a>
  </div>
  
  <div class="servic-item ltr-effect mg " >
  <i class="fa fa-cogs"></i>
  <h2 class="servic-item-title">fully custom</h2>
  <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                             JIJIWEpkEOKDPSAEJKPESAK</p>
  <a href="#" class=".link">read more</a>
  </div>
  
  <div class="servic-item ltr-effect ">
  <i class="fa fa-cogs"></i>
  <h2 class="servic-item-title">fully custom</h2>
  <p class="servic-item-desc">welÜKPOEKoekoüwKOEKOKOSI 
                             JIJIWEpkEOKDPSAEJKPESAK</p>
  <a href="#" class=".link">read more</a>
  </div>
  </div>
  </div>
  
  

      
      
  
     
 
         
         
         
         <br><br>
         
 
             

             



             <script src="popper.min.js"></script>
             <script src="jquery-3.7.1.js"></script>
             <script src="bootstrap.js"></script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>