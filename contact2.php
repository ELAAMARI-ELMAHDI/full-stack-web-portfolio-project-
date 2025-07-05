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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="pd-y" id="contact">
        <div class="container">
            <div class="intro">
                <h1 class="int-title">To contact me!</h1>
                <span class="int-line"></span>
            </div>
            
            

        </div>

    </div>


    <div class="contct container">
        <div class="contnt">
            <h1>Contact us:</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Laudantium modi eius, numquam ipsam exercitationem at earum. </p>

      

       </div>
       <div class="containerr">
        <div class="contct-info">
            <div class="box">
                <div class="icons"><b></b><i class="fa-solid fa-location-dot"></i></div>
                <div class="text-cntct"><h4>Address:</h4><p>Maroc,Casablanca</p></div>

            </div>
       

            <div class="box">
                <div class="icons"><b></b><i class="fa-solid fa-phone"></i></div>
                <div class="text-cntct"><h4>Phone:</h4><p>0698......</p></div>

            </div>

            <div class="box">
                <div class="icons"><b></b><i class="fa-solid fa-envelope"></i></div>
                <div class="text-cntct"><h4>Email:</h4><p>elaamarimahdi...@gmail.com</p></div>

            </div>
            


        </div>
        <div class="contct-form ">
            <form action="insertContact.php" method="post">
                <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;color: red;">Send message</h2><br>
              
              
                <div class="inputbox">
                    <input class="inpt"  type="text" name="Add" required>
                    <span>Address</span>

                </div>
                <br> 
                <div class="inputbox">
                    <input class="inpt"  type="email" name="ema" required>
                    <span>Email</span>

                </div>
                <br> 

             
                <div class="inputbox">
                    <input class="inpt" type="number" name="Number" required>
                    <span>Phone</span>

                </div><br>
                <div class="inputbox">
                    <select class="inputbox" name="Serv" id="">
                        <?php
                       include 'cnx.php';
                       $ops=$db->query("SELECT * FROM service")->fetchAll();
                       echo '<option value ="">Services:</option>';
                        foreach($ops as $op){
                            echo '<option value =" '.$op['title'].'">'.$op['title'].'</option>';

                        }
                    
                         ?>
                    </select>
                  

                </div><br>

                <div class="inputbox">
                    <textarea name="Desc" id="" required="required"></textarea>
                    <span>Description...</span>

                </div><br>
                <div class="inputbox">
                    <input  type="submit" value="send" name="btn" class="btn  btn-outline-danger" required>
                    

                </div>
            </form>

        </div>

    </div>
    </div>
    




    <script src="popper.min.js"></script>
    <script src="jquery-3.7.1.js"></script>
    <script src="bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
</body>
</html>