<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../vendor/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../vendor/bootstraps/js/bootstrap.bundle.js"></script>
    <script src="../vendor/aos/aos.ajs.js"></script>
    <script src="../vendor/aos/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../vendor/aos/aos.js.map"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="../vendor/bootstraps/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <header class="header">
        <a href="../index.php" class="logo"><img src="../img/logo png.png" alt="logo"></a>
        <nav class="navbar">
            <a class="active" href="../index.php" id="hero-link">Trang Chủ</a>
            <a href="../index.php#product" id="product-link">Sản phẩm</a>
            <a href="../index.php#about" id="about-link">Giới thiệu</a>
            <a href="../index.php#knowledge" id="knowledge-link">Kiến Thức</a>
            <a href="../index.php#agency" id="agency-link">Đặt Hàng</a>
        </nav>
        <div class="icons">
            <i class="fa fa-bars" id="menu-bars" aria-hidden="true"></i>
            <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
            <a href="../account/account.php" class="fa fa-user" aria-hidden="true" id="user-icon"></a>
        </div>
        <form action="../form/connect.php" method="post" id="search-form">
            <input type="search" name="search" id="search-box" placeholder="Tìm Kiếm ở đây...." required>
            <label for="search-box" class="fas fa-search"></label>
            <i class="fa fa-times" id="close" aria-hidden="true"></i>
        </form>
    </header>
    <section class="py-lg-5">
        <div class="container-sm">
            <div class="form-container">
                <form id="register-form" class="form-floating" action="../form/login.php">
                    <h2>Đăng Nhập</h2>
                    <div class="input-group">
                        <input type="text" id="username" name="username" placeholder="Họ Tên" required>
                    </div>
                    <div class="input-group">
                        <input type="password" id="user_password" name="user_password" placeholder="Mật khẩu" required>
                        <span class="toggle-password" onclick="togglePassword('register-password', this)">Hiện</span>
                    </div>
                    <input type="submit" name="login" id="login" value="Đăng Nhập">
                    <p>chưa có tài khoản <a href="register.php">Đăng Ký</a></p>
                </form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p> Copyright 2024 All rights reserved. By &nbsp;<a href="index.php">Enbesu</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js">
    </script>
</body>

</html>