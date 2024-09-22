<?php
  include '../form/connect.php';
  $product = $_POST['product'];
  $quantity = $_POST['quantily'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];

// Chuẩn bị câu lệnh SQL
$sql = "INSERT INTO orders (product, quantily, name, address, phone) VALUES ('$product', '$quantily', '$name', '$address', '$phone')";

// Thực thi câu lệnh SQL    
if ($mysqli->query($sql) === TRUE) {
    echo "<script>alert('Đặt hàng thành công! Chúng Tôi Sẽ Liên Hệ Cho Bạn.'); window.location.href='../index.php';</script>";
} else {
    echo "Lỗi: " . $sql . "<br>" . $mysqli->error;
}

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Sản Phẩm: " . $row["product"]. " - Số Lượng: " . $row["quantily"]. " - Họ Tên: " . $row["name"]. " - Địa Chỉ: " . $row["address"]. " - Điện Thoại: " . $row["phone"]. "<br>";
    }
} else {
    echo "Không có đơn hàng nào.";
}



// Đóng kết nối
$mysqli->close();
?>

