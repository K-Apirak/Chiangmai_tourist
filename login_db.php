<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    session_start();
    include 'db_connection.php';

    $errors = array();

    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['pwd1']);

        if (empty($username)){
            array_push($errors,"คุณต้องทำการกรอก Username");
        }
        if (empty($password)){
            array_push($errors,"คุณต้องทำการกรอก password");
        }
        if(count($errors) == 0){
            // เดิมเทียบรหัสผ่านแบบ plain text ตรงๆ ในคำสั่ง SQL — เปลี่ยนมาดึงผู้ใช้
            // ด้วย username อย่างเดียว แล้วตรวจรหัสผ่านด้วย password_verify() แทน
            $sql = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
            $user = $result ? mysqli_fetch_assoc($result) : null;

            $login_ok = false;
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $login_ok = true;
                } elseif ($password === $user['password']) {
                    // รองรับบัญชีเก่าที่ยังเก็บรหัสผ่านเป็น plain text อยู่
                    // ล็อกอินผ่านได้ครั้งนี้ แล้วอัปเกรดเป็น hash ให้อัตโนมัติ
                    $login_ok = true;
                    $hashed = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("UPDATE user SET password = ? WHERE username = ?");
                    $stmt->bind_param("ss", $hashed, $username);
                    $stmt->execute();
                    $stmt->close();
                }
            }

            if($login_ok){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้ทำการเข้าสู่ระบบแล้ว";
            header('location: index.php');
            exit();
            } else{
                $_SESSION['error'] = "โปรดตรวจเช็คชื่อผู้ใช้หรือรหัสผ่าน";
                header("location: Login.php");
                exit();
            }
        }
    }
 
?>
</body>
</html>
