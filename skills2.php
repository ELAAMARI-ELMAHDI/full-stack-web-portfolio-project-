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
              <a class="Deco" href="deco.php"  >Deconnextion</a>

        </div>
        </div>
    </header>
    <div class="About pd-y" id="skills">
        <div class="container">
            <div class="intro">
                <h1 class="int-title">My Skills!</h1>
                <span class="int-line"></span>
            </div>
            
            

        </div>

    </div>

    <div class="container m-5">
        <div class="row">
            <div class="col-lg-8">
              
                <div class="hero bg-light ">
                    <div class="container ">
                      <h1 class="display-4 text-dark">EL AAMARI MAHDI</h1>
                      <p class="lead">Passionate Web Developer | Expert in Website Creation and Optimization

                        I am a dedicated web developer with a true passion for creating innovative and effective digital solutions. My experience covers the development of dynamic and statistical websites, the integration of attractive user interfaces and performance optimization.</p>
                     <button class="btn btn-outline-danger" type="submit">Learn more</button>
                     
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">

                <div class="list-group">
                    <button data-bs-toggle="collapse" href="#x" type="button" class="list-group-item list-group-item-action bg-danger text-dark" aria-current="true" >
                      My Skills
                       </button>

                <div class="collapse show" id="x">
                    <button type="button" class="list-group-item list-group-item-action text-dark">M-office</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">Pyton</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark ">Html</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">Css</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">Bootstrap</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">JavaScript</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">Php</button>
                    <button type="button" class="list-group-item list-group-item-action text-dark">sql</button>
                    
                   
                </div>
                   
                    
            
                  </div>
            </div>

        </div>
      </div>


 


      <script src="popper.min.js"></script>
      <script src="jquery-3.7.1.js"></script>
      <script src="bootstrap.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>