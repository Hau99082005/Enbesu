<?php
   include '../form/connect.php';
   if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_BCRYPT);
    $user_phone = $_POST['user_phone'];
    $sql = "INSERT INTO users (username, user_password, user_phone) VALUES ('$username', '$user_password', '$user_phone')";
    if($mysqli->query($sql) === TRUE) {
      echo "Đăng Ký Thành Công";
   }else {
    echo "Lỗi".$sql."<br>".$mysqli->error;
   }
   $mysqli->close();
}
?>