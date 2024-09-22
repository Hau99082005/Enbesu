<header class="header">
        <a href="index.php" class="logo"><img src="img/logo png.png" alt="logo"></a>
        <nav class="navbar">
            <a class="active" href="index.php" id="hero-link">Trang Chủ</a>
            <a href="index.php#product" id="product-link">Sản phẩm</a>
            <a href="index.php#about" id="about-link">Giới thiệu</a>
            <a href="index.php#knowledge" id="knowledge-link">Kiến Thức</a>
            <a href="index.php#agency" id="agency-link">Đặt Hàng</a>
        </nav>
        <div class="icons">
            <i class="fa fa-bars" id="menu-bars" aria-hidden="true"></i>
            <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
            <a href="../account/account.php" class="fa fa-user" aria-hidden="true" id="user-icon"></a>
        </div>
        <form action="form/dathang.php" method="post" id="search-form">
            <input type="search" name="search-box" id="search-box" placeholder="Tìm Kiếm ở đây...." required>
            <button type="submit" name="search-button" id="search-button" for="search-box" class="fas fa-search"></button>
            <i class="fa fa-times" id="close" aria-hidden="true"></i>
        </form>

    </header>