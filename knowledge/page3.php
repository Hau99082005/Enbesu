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
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-10">
                            <h1>Ngũ Cốc Enbesu: Bí Quyết Dinh Dưỡng Từ Thiên Nhiên Cho Mọi Lứa Tuổi</h1>
                            <div class="list">
                                <a href="../index.php">Trang Chủ</a>/
                                <a href="../index.php#knowledge">Kiến Thức</a>/
                                <p>Bí quyết dinh dưỡng...</p>
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
                                    <img src="../img/Ảnh Bài Viết Bí Quyết Dinh Dưỡng Từ Thiên Nhiên Cho Mọi Lứa Tuổi 01.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <p>Hiện nay! việc duy trì một chế độ ăn uống lành mạnh và cân bằng là điều quan trọng đối với sức khỏe của mọi người. Ngũ Cốc Enbesu đã được phát triển với sứ mệnh mang đến giải pháp dinh dưỡng hoàn hảo từ thiên nhiên,
                                        phù hợp với mọi lứa tuổi và nhu cầu dinh dưỡng khác nhau. Với thành phần từ những nguyên liệu chất lượng cao và quy trình sản xuất đạt chuẩn, Ngũ Cốc Enbesu không chỉ là một sản phẩm bổ sung dinh dưỡng mà còn là
                                        người bạn đồng hành đáng tin cậy trong hành trình chăm sóc sức khỏe của bạn và gia đình.</p>
                                    <img src="../img/Ảnh Bài Viết Bí Quyết Dinh Dưỡng Từ Thiên Nhiên Cho Mọi Lứa Tuổi 02.jpg" class="img-fluid" alt="">
                                    <h3 class="left">1. Giới Thiệu Tổng Quan Về Ngũ Cốc Enbesu</h3>
                                    <p>
                                        Ngũ Cốc Enbesu là sản phẩm được chế biến từ nhiều loại hạt và ngũ cốc giàu dinh dưỡng như đậu xanh, đậu đen, đậu đỏ, đậu nành, đậu trắng, đậu ngự, hạt óc chó đỏ và vàng, hạt chia, hạnh nhân, yến mạch, mắc ca, hạt điều, hạt sen, hạt mè(vừng) và gạo lứt
                                        huyết rồng. Mỗi thành phần trong Ngũ Cốc Enbesu đều được chọn lựa kỹ càng, đảm bảo chất lượng và giá trị dinh dưỡng cao nhất. Sản phẩm không chứa chất bảo quản, không sử dụng đường tinh luyện hay các chất phụ gia
                                        nhân tạo, giúp giữ nguyên những lợi ích tự nhiên của các nguyên liệu và mang lại hương vị thơm ngon, dễ uống.
                                    </p>
                                    <h3 class="left">2. Quy Trình Sản Xuất Đạt Chuẩn</h3>
                                    <p>
                                        Ngũ Cốc Enbesu được sản xuất theo quy trình đạt chuẩn, tuân thủ các tiêu chuẩn chất lượng cao để đảm bảo an toàn vệ sinh thực phẩm và giữ nguyên giá trị dinh dưỡng của từng loại nguyên liệu. Quy trình sản xuất bắt đầu từ việc chọn lựa các loại hạt và
                                        ngũ cốc chất lượng, đã được kiểm tra và sàng lọc kỹ càng. Sau đó, các nguyên liệu này được làm sạch để loại bỏ tạp chất và bụi bẩn. Tiếp theo, quá trình sấy và rang chín diễn ra ở nhiệt độ phù hợp để giữ lại tối
                                        đa hàm lượng dinh dưỡng và hương vị tự nhiên của các loại hạt. Cuối cùng, tất cả các nguyên liệu được xay mịn để tạo nên bột ngũ cốc sánh mịn, dễ uống, và dễ hấp thụ vào cơ thể. Nhờ quy trình sản xuất hiện đại,
                                        Ngũ Cốc Enbesu luôn đảm bảo chất lượng và an toàn cho người tiêu dùng.
                                    </p>
                                    <h3 class="left">3. Lợi Ích Dinh Dưỡng Đa Dạng Cho Mọi Lứa Tuổi</h3>
                                    <p>Ngũ Cốc Enbesu là nguồn dinh dưỡng phong phú và cân bằng, phù hợp với mọi lứa tuổi từ trẻ nhỏ, người trưởng thành đến người cao tuổi. Sản phẩm cung cấp một lượng lớn protein, chất xơ, vitamin và khoáng chất thiết yếu
                                        như canxi, sắt, magie, và kẽm, giúp đáp ứng nhu cầu dinh dưỡng hàng ngày của cơ thể.</p>
                                    <h3 class="left">3.1. Đối Với Trẻ Nhỏ Và Thanh Thiếu Niên</h3>
                                    <p>Trẻ nhỏ và thanh thiếu niên đang trong giai đoạn phát triển nhanh chóng, cần bổ sung nhiều dưỡng chất để hỗ trợ quá trình tăng trưởng và phát triển toàn diện. Ngũ Cốc Enbesu với hàm lượng protein cao từ các loại hạt
                                        và đậu, cung cấp axit amin thiết yếu giúp xây dựng cơ bắp và phát triển chiều cao. Chất xơ trong sản phẩm cũng hỗ trợ hệ tiêu hóa của trẻ hoạt động hiệu quả hơn, ngăn ngừa táo bón và giúp duy trì cân nặng hợp lý.</p>
                                    <h3 class="left">3.2. Đối Với Người Trưởng Thành</h3>
                                    <p>Người trưởng thành cần một chế độ dinh dưỡng cân đối để duy trì sức khỏe và năng lượng cho các hoạt động hàng ngày. Ngũ Cốc Enbesu cung cấp carbohydrate phức hợp từ ngũ cốc nguyên cám và hạt, giúp cung cấp năng lượng
                                        kéo dài và ổn định đường huyết. Bên cạnh đó, sản phẩm còn chứa các chất chống oxy hóa từ hạt chia, hạt óc chó, và hạnh nhân, giúp bảo vệ tế bào khỏi sự tấn công của các gốc tự do, giảm nguy cơ mắc các bệnh mãn tính
                                        và duy trì sức khỏe tim mạch.</p>
                                    <h3 class="left">3.3. Đối Với Người Cao Tuổi</h3>
                                    <p>Người cao tuổi thường gặp phải vấn đề về tiêu hóa, loãng xương, và các bệnh lý mãn tính khác. Ngũ Cốc Enbesu với hàm lượng chất xơ cao, hỗ trợ tiêu hóa tốt hơn và duy trì đường ruột khỏe mạnh. Đồng thời, canxi và vitamin
                                        D trong sản phẩm giúp tăng cường xương khớp, phòng ngừa loãng xương và bảo vệ sức khỏe xương cho người cao tuổi.</p>
                                    <h3 class="left">4. Sự Lựa Chọn Hoàn Hảo Cho Mọi Gia Đình</h3>
                                    <p>Với tất cả những lợi ích vượt trội, Ngũ Cốc Enbesu là sự lựa chọn lý tưởng cho mọi gia đình. Dù bạn đang tìm kiếm một bữa sáng nhanh gọn, một bữa ăn nhẹ dinh dưỡng hay một bữa phụ giàu năng lượng cho con trẻ, Ngũ Cốc
                                        Enbesu đều đáp ứng được. Sản phẩm không chỉ đơn giản, tiện lợi mà còn giúp bạn dễ dàng bổ sung đầy đủ dinh dưỡng từ thiên nhiên cho cả gia đình.</p>
                                    <p class="text-center alert-heading">Ngũ Cốc Enbesu là sự kết hợp hoàn hảo giữa những giá trị dinh dưỡng từ thiên nhiên và công nghệ sản xuất hiện đại, mang lại lợi ích sức khỏe to lớn cho mọi lứa tuổi. Với cam kết chất lượng và an toàn cho người tiêu
                                        dùng, Ngũ Cốc Enbesu không chỉ là một sản phẩm dinh dưỡng mà còn là người bạn đồng hành đáng tin cậy trên hành trình chăm sóc sức khỏe toàn diện của bạn và gia đình.</p>
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
                                <input type="text" placeholder="Tìm kiếm bài viết..." id="content-input" required>
                                <button type="submit" title="Search"><i class="fa fa-search" aria-hidden="true"></i></button>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/main.js">
    </script>
</body>

</html>