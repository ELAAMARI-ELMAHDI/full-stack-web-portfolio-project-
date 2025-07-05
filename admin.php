<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>لوحة تحكم الأدمن</title>
  <style>

  
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #111;
      color: #fff;
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 23%;
      background-color: #000;
      padding: 20px;
      display: flex;

      flex-direction: column;
    }

    .sidebar h2 {
      color: #e63946;
      margin-bottom: 30px;
      text-align: center;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      margin: 10px 0;
      padding: 8px 12px;
      border-radius: 4px;
      transition: 0.3s;
    }

    .sidebar a:hover {
      background-color: #e63946;
    }

    .main {
      display: flex;
      flex-direction: column;
      width: 100%;
      padding: 20px;
      height: 200;
    
    }
    

    h1 {
      color: #e63946;
      margin-bottom: 20px;
    }

    h2 {
      border-bottom: 2px solid #e63946;
      padding-bottom: 5px;
      margin-top: 40px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background-color: #222;
    }

    th, td {
      padding: 12px;
      border: 1px solid #333;
      text-align: center;
    }

    th {
      background-color: #e63946;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #1a1a1a;
    }

    form {
      margin-top: 20px;
      background-color: #222;
      padding: 20px;
      border-radius: 8px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    button {
      background-color: #e63946;
      border: none;
      padding: 10px 20px;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background-color: #ff4d4d;
    }
    .profile {
      display: flex;
      text-align: left;
      align-items: center;
      gap: 40px;
      margin-top: 30px;
    }
    .profile img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 5px solid #333;
      object-fit: cover;
    }
    .info {
      max-width: 60%;
      margin-right: 200px;
    }
    .info h2 {
      color: red;
      font-size: 2.5em;
      
    }
    .info p {
      color: #ccc;
      margin: 20px 0;
      line-height: 1.6;
    }
    .buttons {
      display: flex;
      gap: 20px;
      margin-top: 20px;
      margin-right: 300px;
    }
    .buttons button {
      background-color: transparent;
      color: white;
      border: 2px solid red;
      padding: 10px 20px;
      border-radius: 25px;
      cursor: pointer;
      transition: 0.3s;
    }
    .buttons button:hover {
      background-color: red;
      color: white;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>لوحة التحكم</h2>
    <a href="user.php"  >المستعملين</a>
    <a href="client.php" >الزبناء</a>
    <a href="adminTab.php" >الأدمن</a>
    <a href="addADM.php" >إضافة أدمن</a>
    <a href="servTab.php">الخدمات</a>
    <a href="addSER.php" >إضافة خدمة</a>
  </div>

<div style="display: flex;flex-direction:column;width:75%;">

  <div class="main">
    <div style="display: flex;width:100%;">
     <div style="display: flex;margin-right: 60px;">
       <h1 class="t1" style="margin-right: 120px;width: 100%;border-bottom: 1px solid white;">Welcome to the Admin Dashboard</h1>  
     </div>
    </div>
</div>

  
<div>

 


  <div class="profile">
    <img style="margin-right: 30px;" src="<?php if (isset($_SESSION['image'])) {echo  $_SESSION['image'];}?>" alt="صورة شخصية">
    <div class="info">
      <small>Hi  <span style="color: red;">  Welcome Mr</span></small>
      <h2 ><?php if (isset($_SESSION['name'])) {echo  $_SESSION['name'];}?></h2>
      <p>
      Hello,
      Being an Admin means taking full responsibility for managing and organizing everything related to the page, community, or platform I oversee.
      My key duties include:

      Monitoring published content to ensure it aligns with the rules and standards.

      Creating a positive, respectful environment that encourages healthy interactions among members.

      Responding to inquiries, resolving issues, and handling complaints professionally and promptly.

      Developing and enhancing content to attract and grow the audience.


      </p>
      
      <div class="buttons">
        <button>  <a style="text-decoration: none;color:white;" href="about2.php">Back to Sitweb</a></button>
       
      </div>
    </div>
  </div>


</div>

</div>
    
</body>
</html>