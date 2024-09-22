<!DOCTYPE html>
<html lang="en">
    <?php
     if(isset($_POSST['search'])) {
        $keyword = $_POSST['content-input'];
        $query = "SELECT * FROM `orders` '%$keyword%'";
        $result = mysqli_query($mysqli, $query);
        if(mysqli_num_rows($result) > 0) {
            echo "<h2>Kết quả tìm kiếm</h2>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "div"; echo "<h3>".$row['title']."</h3>";
                echo "<p>".substr($row['content'], 0, 100)."...</p>";
                echo "</div>";
            }
        }else {
            echo "không tìm thấy kết quả nào";
        }
     }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiến Thức</title>
    <link rel="stylesheet" href="../vendor/bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../vendor/bootstraps/js/bootstrap.bundle.js"></script>
    <script src="../vendor/aos/aos.ajs.js"></script>
    <script src="../vendor/aos/aos.js"></script>
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
            <a class="active" href="index.php" id="hero-link">Trang Chủ</a>
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
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-10">
                            <h1>Bí Quyết Làm Đẹp Từ Bên Trong Với Ngũ Cốc</h1>
                            <div class="list">
                                <a href="../index.php">Trang Chủ</a><p>/</p>
                                <a href="../index.php#knowledge">Kiến Thức</a><p>/</p>
                                <p>Làn da tươi trẻ...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <section id="blog-details" class="blog-details section">
                        <div class="container">
                            <article class="article">
                                <div class="post-img">
                                    <img src="../img/Ảnh Bài Viết Bí Quyết Làm Đẹp Từ Bên Trong Với Ngũ Cốc 02.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <p>Trong cuộc sống hiện đại, vẻ đẹp không chỉ dừng lại ở bề ngoài mà còn phản ánh sức khỏe và sự cân bằng từ bên trong. Để đạt được làn da tươi trẻ, cơ thể khỏe mạnh và năng lượng tràn đầy, việc lựa chọn những thực phẩm
                                        bổ dưỡng và lành mạnh là vô cùng quan trọng. Ngũ Cốc Enbesu, với sự kết hợp hoàn hảo giữa các loại hạt dinh dưỡng và ngũ cốc chất lượng cao, chính là bí quyết giúp bạn làm đẹp từ bên trong một cách tự nhiên và hiệu
                                        quả.
                                    </p>
                                    <img src="../img/Ảnh Bài Viết Bí Quyết Làm Đẹp Từ Bên Trong Với Ngũ Cốc 01.jpg" class="img-fluid" alt="">
                                    <h3 class="left">1. Dinh Dưỡng Từ Thiên Nhiên Cho Làn Da Rạng Rỡ</h3>
                                    <p>
                                        Ngũ Cốc Enbesu chứa một lượng lớn các loại hạt như óc chó, hạnh nhân, mắc ca, hạt chia, hạt điều, hạt sen và nhiều loại ngũ cốc giàu dinh dưỡng khác. Những nguyên liệu này không chỉ giàu vitamin E, chất chống oxy hóa mạnh mẽ giúp bảo vệ làn da khỏi tác
                                        hại của các gốc tự do, mà còn cung cấp omega-3 và omega-6, giúp duy trì độ ẩm và độ đàn hồi cho da. Việc bổ sung thường xuyên Ngũ Cốc Enbesu vào chế độ ăn sẽ giúp bạn có một làn da mịn màng, săn chắc và giảm thiểu
                                        các dấu hiệu lão hóa.
                                    </p>
                                    <h3 class="left">2. Tăng Cường Sức Khỏe Tóc Và Móng</h3>
                                    <p>
                                        Ngoài lợi ích cho làn da, các loại hạt dinh dưỡng trong Ngũ Cốc Enbesu còn rất tốt cho sức khỏe tóc và móng. Các dưỡng chất như biotin, protein, và kẽm có trong hạt điều, yến mạch, và gạo lứt giúp tóc chắc khỏe, giảm gãy rụng và thúc đẩy sự phát triển
                                        của tóc. Đồng thời, chúng cũng cung cấp các khoáng chất thiết yếu giúp móng chắc khỏe, tránh tình trạng móng yếu, dễ gãy.
                                    </p>
                                    <h3 class="left">3. Hỗ Trợ Hệ Tiêu Hóa Khỏe Mạnh</h3>
                                    <p>Một hệ tiêu hóa khỏe mạnh là nền tảng cho vẻ đẹp từ bên trong. Ngũ Cốc Enbesu chứa hàm lượng lớn chất xơ từ các loại hạt và ngũ cốc, giúp cải thiện hệ tiêu hóa và thúc đẩy quá trình trao đổi chất. Chất xơ không chỉ
                                        giúp bạn duy trì cân nặng hợp lý mà còn giúp cơ thể hấp thu tốt hơn các dưỡng chất cần thiết, từ đó mang lại làn da và mái tóc khỏe mạnh.</p>
                                    <h3 class="left">4. Nguồn Năng Lượng Bền Vững Cho Cơ Thể</h3>
                                    <p>Cơ thể cần một nguồn năng lượng bền vững để duy trì sức sống và sự năng động suốt cả ngày dài. Ngũ Cốc Enbesu, với sự kết hợp hài hòa của carbohydrate phức tạp và chất béo lành mạnh, cung cấp năng lượng lâu dài mà không
                                        gây tăng đột ngột lượng đường trong máu. Điều này giúp bạn luôn tỉnh táo, tập trung và tràn đầy năng lượng, sẵn sàng đối mặt với mọi thách thức trong ngày.</p>
                                    <h3 class="left">5. Duy Trì Cân Bằng Nội Tiết Tố</h3>
                                    <p>Sự cân bằng nội tiết tố có vai trò quan trọng trong việc duy trì vẻ đẹp và sức khỏe tổng thể. Các loại hạt dinh dưỡng như hạt chia, óc chó và hạnh nhân trong Ngũ Cốc Enbesu chứa nhiều acid béo omega-3 và omega-6, giúp
                                        cân bằng nội tiết tố và hỗ trợ các chức năng cơ thể hoạt động trơn tru. Điều này đặc biệt quan trọng cho phụ nữ, giúp duy trì làn da tươi trẻ và sức khỏe sinh sản.</p>

                                    <p class="text-center alert-heading">Ngũ Cốc Enbesu không chỉ là một sản phẩm dinh dưỡng hoàn hảo mà còn là bí quyết giúp bạn làm đẹp từ bên trong một cách tự nhiên và bền vững. Hãy bổ sung Ngũ Cốc Enbesu vào chế độ ăn hàng ngày của bạn để tận hưởng những
                                        lợi ích tuyệt vời cho làn da, mái tóc, và sức khỏe tổng thể. Làm đẹp không chỉ từ bên ngoài mà còn từ sự chăm sóc và yêu thương cơ thể từ bên trong.</p>
                                </div>
                            </article>
                        </div>
                    </section>
                </div>
                <div class="col-2 sidebar">
                    <div class="widgets-container">
                        <div class="search-widget widget-item">
                            <h3 class="widget-title">Tìm Kiếm</h3>
                            <form action="../form/connect.php" class="form-control">
                                <input type="text" placeholder="Tìm kiếm bài viết..." id="content-input" name="content-input" required>
                                <button type="submit" title="Search" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="recent-posts-widget widget-item">
                            <h3 class="widget-title">Bài Viết Gần Đây</h3>
                        </div>
                        <div class="post-item">
                            <img src="../img/Ảnh Bài Viết Bí Quyết Làm Đẹp Từ Bên Trong Với Ngũ Cốc 02.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="../knowledge/page1.php">Bí Quyết Làm Đẹp Từ Bên Trong Với Ngũ Cốc</a></h4>
                                <time datetime="2024-09-02">2024-09-02</time>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="../img/Ảnh Bài Viết Chọn Ngũ Cốc Enbesu Cho Sức Khỏe Tim Mạch Và Hệ Miễn Dịch Tốt Hơn 01.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="../knowledge/page2.php">Chọn Ngũ Cốc Enbesu Cho Sức Khỏe Tim Mạch Và Hệ Miễn Dịch Tốt Hơn.</a></h4>
                                <time datetime="2024-09-02">2024-09-02</time>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="../img/Ảnh Bài Viết Bí Quyết Dinh Dưỡng Từ Thiên Nhiên Cho Mọi Lứa Tuổi 01.jpg" alt="" class="flex-shrink-0">
                            <div>
                                <h4><a href="../knowledge/page3.php">Ngũ Cốc Enbesu: Bí Quyết Dinh Dưỡng Từ Thiên Nhiên Cho Mọi Lứa Tuổi</a></h4>
                                <time datetime="2024-09-02">2024-09-02</time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <div class="float-contact">
        <button class="face">
            <a href="https://facebook.com/enbesu"><i class="fa-brands fa-facebook"></i></a>
           </button>
        <button class="chat-zalo">
        <a href="http://zalo.me/0359333635">Zalo</a>
        </button>
        <button class="hotline">
        <a href="tel:0359333635"><i class="fa fa-phone"></i></a>
        </button>
    </div>
    <section class="py-3" id="agency">
        <div class="container">
            <div class="row">
                <div class="col-5">
                <form class="form" action="../form/dathang.php" method="post">
                        <h2 class="text-center" style="color: #fff;">Đặt Hàng</h2>
                        <p class="text-center mb-4" style="color: #fff">(Mua từ 5kg để nhận giá Sỉ)</p>
                        <div class="form-group">
                            <select id="product" name="product">
                     <option value="" id="product">Chọn Sản Phẩm<i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i></option>
                     <option value="Ngũ Cốc Dinh Dưỡng" id="product">Ngũ Cốc Dinh Dưỡng</option>
                     <option value="Ngũ Cốc Tăng Cân" id="product">Ngũ Cốc Tăng Cân</option>
                     <option value="Ngũ Cốc Lợi Sữa" id="product">Ngũ Cốc Lợi Sữa</option>
                    </select>
                        </div>
                        <div class="form-group">
                        <select>
                        <option value="">Chọn số lượng<i class="fa fa-arrow-alt-circle-up" aria-hidden="true"></i></option>
                        <option value="0.5kg" id="quantily" name="quantily">0.5kg</option>
                        <option value="1kg" id="quantily" name="quantily">1kg</option>
                        <option value="2kg" id="quantily" name="quantily">2kg</option>
                        <option value="3kg" id="quantily" name="quantily">3kg</option>
                        <option value="5kg" id="quantily" name="quantily">5kg</option>
                        <option value="20kg" id="quantily" name="quantily">20kg</option>
                        <option value="50kg" id="quantily" name="quantily">50kg</option>
                        <option value="100kg" id="quantily" name="quantily">100kg</option>
                    </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Họ tên" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Điện thoại" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" id="address" placeholder="Địa chỉ" required>
                        </div>
                        <div class="form-group">
                            <textarea id="messenge" placeholder="Ghi Chú"></textarea>
                        </div>
                        <button type="submit" id="order" name="dathang">Đặt Hàng<i class=" fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <p> Copyright 2019 All rights reserved. By &nbsp;<a href="../index.php">Enbesu</a></p>
    </footer>

    <?php 
      
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js">
    </script>
</body>

</html>