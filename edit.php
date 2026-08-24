<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel = "stylesheet" href="style.css">
          <link href="https://fonts.googleapis.com/css2?family=Mali:wght@400;700&display=swap" rel="stylesheet">
          <title>แบบฟอร์มการแก้ไขข้อมูลผู้ใช้</title>
</head>
<body class="edit_body">
  <?php
include 'db_connection.php';

if (!isset($_POST['username'])) {
?>
    <form method="POST" action="edit.php">
        <fieldset>
        <legend>แก้ไขข้อมูลผู้ใช้</legend>

        กรุณากรอก Username ที่ต้องการแก้ไข<p><br>
        <label >Username: <input type="text" name="username"></label>
        <p><br>
        <div class="dataedit">
        <center>
        <input type="submit" name="send" value="Submit">
        <input type="reset" value="Reset"><br></center>
        <br></div>
        <center><a href='Login.php'>กลับหน้า Login </a></center>
    </form>

<?php
} else {
    $_username = $_POST['username'];

    if (isset($_POST['Submit'])) {
        // เข้ารหัสรหัสผ่านใหม่ก่อนบันทึก (เดิมเก็บเป็น plain text)
        $Userpass = password_hash($_POST['user_pwd'], PASSWORD_DEFAULT);

        // ใช้ prepared statement ป้องกัน SQL Injection (เดิมต่อ string ตรงๆ)
        $stmt = $conn->prepare("UPDATE user SET password = ? WHERE Username = ?");
        $stmt->bind_param("ss", $Userpass, $_username);
        $result = $stmt->execute();
        $stmt->close();

        if ($result) {
            echo "<center><b style='color:green; font-size:20px;'>Update Successfully</b><br></center>";
        } else {
            echo "<b style='color:red;'>Update Failed:</b> " . htmlspecialchars($conn->error) . "<br>";
        }
    }

    $stmt_fetch = $conn->prepare("SELECT * FROM user WHERE Username = ?");
    $stmt_fetch->bind_param("s", $_username);
    $stmt_fetch->execute();
    $dbarr = $stmt_fetch->get_result()->fetch_assoc();
    $stmt_fetch->close();

    if ($dbarr) {
        $safe_username = htmlspecialchars($_username, ENT_QUOTES);
        echo "<form action='edit.php' method='post'>";
        echo "<input type='hidden' name='username' value='$safe_username'>";
        echo'<br>';
        echo "<center style='color:red; font-size:20px'><b>แก้ไขรหัสผ่าน</b></center>";
        echo'<br>';
        echo "<p style='padding:10px';>Username : " . $safe_username .'';
        echo "<p style='padding:10px ;,margin-bottom: 20px;';>กรอกรหัสผ่านใหม่ : ";
        echo'<br>';
        echo'<br>';
        // รหัสผ่านถูกเข้ารหัสแล้วในฐานข้อมูล จึงไม่แสดงค่าเดิมกลับมาในช่องกรอก (ความปลอดภัย)
        echo "<input type='password' name='user_pwd' placeholder='กรอกรหัสผ่านใหม่'><p>";
        echo "<center><input type='submit' name='Submit' value='Confirm'></center>";
        echo'<br>';
        echo " <center><a href='edit.php'>Back</a></center>";
        echo'<br>';
        echo "<center><a href='Login.php'>กลับหน้า Login </a></center>";
        echo "</form>";
    } else {
        echo "<b style='color:white; font-size: 30px;'>ไม่พบชื่อผู้ใช้นี้:</b> ";
        echo "<a style='color:red; font-size: 30px;' href = edit.php ><ins>ย้อนไปก่อนหน้า</ins></a> "."<br>";
    }
}
?>
</fieldset>


</body>
</html>