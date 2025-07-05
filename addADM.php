<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        width: 220px;
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
        flex: 1;
        border-bottom: 1px solid white;
        padding: 20px;
        overflow-y: auto;
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
      </style>
    <section style="text-align: left;" id="admins">
        <h2>Add New Admin</h2>
        <form style="text-align: left;" action="adminInsert.php" method="post" enctype="multipart/form-data">
          <input type="text" name="name" placeholder="username" required>
          <input type="text" name="email" placeholder="email" required>
          <input type="text" name="exp" placeholder="experience" required>
          <input type="file" name="image" placeholder="your image" required>
          <input type="password" name="psw" placeholder="password" required>
          <input type="password" name="cpsw" placeholder="confirme password" required>
          
          <button type="submit" >Add Admin</button>
        </form>
      </section>
       
</body>
</html>