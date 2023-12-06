<?php
	session_start();
  require_once './model/database.inc.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesS.css">
    <title>Document</title>
</head>
<body>
<div class="container">
  <form action="def/checklogin.php">
    <div class="row">

      <div class="col">
        <div>
          <h1>Login</h1>
        </div>

        <input type="text" name="username" method="GET" placeholder="username"  required>
        <input type="password" name="password" method="GET" placeholder="password" required>
        <input type="submit" value="Login">
        
      </div>
      
      
    </div>
  </form>
</div>
</body>
</html>