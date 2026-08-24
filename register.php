<?php 
    include('register_db.php');
    include 'db_connection.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel = "stylesheet" href="style.css">
          <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
          <title>สมัครสมาชิก</title>
</head>
<body class="resgis_body">
<form method="POST" action="register.php">
    <fieldset>
        <legend>สมัครสมาชิก</legend>

        <?php if(isset($_SESSION['error'])): ?>
    <div class="error">
            <h3>
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </h3>
        <?php endif ?>          
    </div>   

    <div class="login"> 
        <div class="input">
           Username:<br>
          <input type="text" name="username" size="20">
          <br>
           Password :<br>
          <input type="password" name="pwd1" size="20">
          <br>
          Confirm Password :<br>
          <input type="password" name="pwd2" size="20">
          <br>
          
        </div>
        <div class="btn_regis1">
                   <input type="submit" name="reg_user" value="สมัครสมาชิก">
            <center><a href="Login.php">มีบัญชีอยู่แล้ว</a></center>
        </div>
    </div>
    </fieldset>
</form>
</body>
</html>