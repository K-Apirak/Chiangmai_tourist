<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel = "stylesheet" href="style.css">
          <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
          <title>Chiangmai Tourist</title>
</head>
<body class="login_body">
<form method="POST" action="login_db.php">
        <fieldset>
        <legend>เข้าสู่ระบบ</legend>

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
          <label>Username:<br>
          <input type="text" name="username" size="20">
          <br></label>
          <label>Password :<br>
          <input type="password" name="pwd1" size="20">
          <br></label>
        </div>
        <div class="btn1">
            <br>
            <input type="submit" name="login_user" value="เข้าสู่ระบบ"><br>
        </div>
        <div class="btn2">
            <a href="edit.php">ลืมรหัสผ่าน?</a><br><br>
            <a href="register.php">สมัครสมาชิก</a>
        </div>
    </div>
    </fieldset>
</form>
</body>
</html>