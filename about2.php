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
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>

    <header class="header">
        <div class="container">
        <div class="logo"><img class="logoo " src="<?php if (isset($_SESSION['image'])) {echo $_SESSION['image'];} ?>" alt=""><h7 class="name" style="color: white;text-decoration:underline red;margin-top:15px;margin-left:5px;"><?php if (isset($_SESSION['name'])) {echo "welcome  ", $_SESSION['name'];}?></h7></div>

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
              <a class="Deco" href="deco.php">Deconnextion</a>

        </div>
        </div>
    </header>
    <div class="About pd-y" id="about">
        <div class="container">
            <div class="intro">
                <h1 class="int-title">About me!</h1>
                <span class="int-line"></span>
            </div>
            
            

        </div>

    </div>

    <div class="container about-content" style="display: flex; flex-direction: row;">
    
    <div class="col-lg-4 p-1 col-md-6 col-12 card1">
        <div class="card  " style="width: 95%;height: 300px;border-radius: 15px;border: 2px solid gray;box-shadow: black 10px 10px 40px;">
      
            <div class="card-body cd">
                <center><h5 class="card-title cdt" style="text-decoration: underline;font-style: oblique;" >Personal Background</h5></center><br>
              <p class="card-text cdd">I am ELAAMARI ELMAHDI,I m a highly motivated individual with a passion for technology and problem-solving. Born and raised in Morocco, I have always been curious about how things work, which naturally led me to pursue a career in programming and technology.</p>
              <button style="margin-left: 40%;"  class="btn btn-outline-danger" type="submit"><span href="#about" style="font-size: medium;font-weight: bolder;font-style: oblique;text-decoration: none;">More</span></button><br>
            </div>
          </div>
    </div>

    <div class="col-lg-4 p-1 col-md-6 col-12 card1">
        <div class="card  " style="width: 95%;height: 300px;border-radius: 15px;border: 2px solid gray;box-shadow: black 10px 10px 40px;">
      
            <div class="card-body cd ">
              <center><h5 class="card-title cdt "  style="text-decoration: underline;font-style: oblique;">Educational Journey</h5></center><br>
              <p class="card-text cdd " >I completed my studies at OFPPT, where I gained a strong foundation in software development. During my time there, I honed my skills in programming, database management, and web development, preparing me for the dynamic tech industry.</p>
              <button style="margin-left: 40%;"  class="btn btn-outline-danger" type="submit"><span href="#about" style="font-size: medium;font-weight: bolder;font-style: oblique;text-decoration: none;">More</span></button><br>
              
            </div>
          </div>
    </div>

    <div class="col-lg-4 p-1 col-md-6 col-12 card1">
        <div class="card  " style="width: 95%;height: 300px;border-radius: 15px;border: 2px solid gray;box-shadow: black 10px 10px 40px;">
      
            <div class="card-body cd ">
                <center><h5 class="card-title cdt"  style="text-decoration: underline;font-style: oblique;"  >Professional Expertise</h5></center><br>
              <p class="card-text cdd">Currently, I work as a Full Stack Developer, combining my knowledge of front-end and back-end technologies to create efficient and user-friendly applications. I enjoy tackling challenges and continuously learning new tools and frameworks to stay ahead in the field.</p>
              <button style="margin-left: 40%;"  class="btn btn-outline-danger" type="submit"><span href="#about" style="font-size: medium;font-weight: bolder;font-style: oblique;text-decoration: none;">More</span></button><br>
              
          
          </div>
       </div>


    </div>
  </div><br><br><br><br>

    <div class="numbers1">
        <div class="overlay">
            <div class="container">
                <h1 class="title " style="text-align: center;color: #f9f9f9;margin-top: 10%;">Welcome to my website!</h1>
              
            </div>
        </div>
     </div>







     <script src="popper.min.js"></script>
     <script src="jquery-3.7.1.js"></script>
     <script src="bootstrap.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>


