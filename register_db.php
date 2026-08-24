<?php    
    session_start();  
    include 'db_connection.php';
    $errors = array();
   
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password_1 = mysqli_real_escape_string($conn,$_POST['pwd1']);
        $password_2 = mysqli_real_escape_string($conn,$_POST['pwd2']);

        if(empty($username)){ array_push($errors, "คุณต้องทำการกรอก Username"); }
        if(empty($password_1)){ array_push($errors, "คุณต้องทำการกรอก Password"); }
        if($password_1 != $password_2){ array_push($errors, "รหัสผ่านไม่ตรงกัน"); }

        $user_check = "SELECT * FROM user WHERE username = '$username'";
        $query=mysqli_query($conn,$user_check);
        $result = mysqli_fetch_assoc($query);

        if($result){
            if($result['username'] === $username){
                // เดิม: ไม่ได้ push เข้า $errors และไม่มี exit()
                // ทำให้โค้ดไหลต่อไปสมัครซ้ำได้ (INSERT ล้มเหลวเงียบๆ) และ set
                // $_SESSION['username'] ราวกับเข้าสู่ระบบสำเร็จโดยไม่ตรวจรหัสผ่าน (auth bypass)
                array_push($errors, "มีชื่อผู้ใช้นี้อยู่ในระบบแล้ว");
            }
        }
        if(count($errors) == 0){
            // เข้ารหัสรหัสผ่านก่อนบันทึก (เดิมเก็บเป็น plain text)
            $password = password_hash($password_1, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user (username,password) VALUES ('$username','$password')";
            mysqli_query($conn,$sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "สมัครสมาชิกสำเร็จ! กรุณาเข้าสู่ระบบ";
            header('location: Login.php');
            exit();
        }else {
            $_SESSION['error'] = $errors[0];
            header("location: register.php");
            exit();
            }
    }
?>