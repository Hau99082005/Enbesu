<?php 
  include '../form/connect.php';
  session_start();
  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $mysqli->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if(password_verify($user_password, $row['user_password'])) {
            $_SESSION['username'] = $username;
            echo "Đăng nhập thành công! chào mừng".$row['username'];
        }else {
            echo 'Mật khẩu không đúng';
        }
    }else {
        echo 'Không tìm thấy người dùng';
    }
    $mysqli->close();
  }
?>