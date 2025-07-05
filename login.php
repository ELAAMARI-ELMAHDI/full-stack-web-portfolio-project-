
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}
body {
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background-image: url(home.jepg.jpeg);width: 100%;
background-size: cover;
object-fit: cover;
background-position: center;


}
body::before {
  content: "";
  position: absolute;

 
}

.logoo{
  
    width: 60%;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    
    
    
}
.wrapper {
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 4px solid rgb(11, 10, 10);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(8px);
}
form {
  display: flex;
  flex-direction: column;
  height: 510px;
  
}
h2 {
  font-size: 2rem;
  margin-bottom: 20px;
  color: #ccc;
}
.input-field {
  position: relative;
  border-bottom: 2px solid rgb(129, 50, 50);
  margin: 15px 0;
}
.input-field label {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  color: black;
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}
.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: #fff;
}
.input-field input:focus~label,
.input-field input:valid~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
}
.forget {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 25px 0 35px 0;
  color: #fff;
}
#remember {
  accent-color: #fff;
}
.forget label {
  display: flex;
  align-items: center;
}
.forget label p {
  margin-left: 8px;
}
.wrapper a {
  color: #efefef;
  text-decoration: none;
}
.wrapper a:hover {
  text-decoration: underline;
}
button {
  background: #fff;
  color: #000;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}
button:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.15);
}
.register {
  text-align: center;
  margin-top: 30px;
  color: #fff;
}

.container{
    width: 90%;
 margin:  auto;
 padding: 0 20px;
     
}
.logor{
    
    width: 40%;
    display: inline;
    float: left;
    padding: 3px;
    
}

.logoor{
  
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  
  
  
}

  </style>

    


    <div class="wrapper" >
        <form action="insertSign.php" method="post">
          <h2>Login</h2>
          <div style="display: flex;flex-direction: row;">
          
          <img class="logoor" src="LOGO.jpeg" alt="">
          <h4 style="color: rgb(237, 10, 10);width: 60%;margin: auto;">Welcome to my website!   </h4></div>
          
            <div class="input-field">
            <input type="email" name="email" required>
            <label>Enter your email</label>
          </div>
          <div class="input-field">
            <input type="password" name="psw">
            <label>Enter your password</label>
          </div>
      
          <div class="forget">
            <label for="remember">
              <input type="checkbox" id="remember">
              <p>Remember me</p>
            </label>
          
          </div>
         
          <button type="submit" name="btn">Login</button>
          <div class="register">
            <p style="color: white;">Don't have an account? <a href="index2.php">Sign up</a></p>
          </div>

          <button  type="submit" class="button google register" style="background-color: black;border-radius: 30px;height: 50px;">
            <i class="fab fa-google icon" style="margin-right: 10px;font-size: 17px;"><a style="text-decoration: none;font-weight: bolder;" href="index2.html"> Sin in with Google!</a></i>
          </button>
        </form>
      </div>

    



    
</body>
</html>