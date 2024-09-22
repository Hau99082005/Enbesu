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
                            <h1>Chọn Ngũ Cốc Enbesu Cho sức khoẻ tim mạch và Hệ Miễn Dịch Tốt Hơn</h1>
                            <div class="list">
                                <a href="../index.php">Trang Chủ</a><p>/</p>
                                <a href="../index.php#knowledge">Kiến Thức</a><p>/</p>
                                <p>Dưỡng chất quan trọng...</p>
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
                                    <img src="../img/Ảnh Bài Viết Chọn Ngũ Cốc Enbesu Cho Sức Khỏe Tim Mạch Và Hệ Miễn Dịch Tốt Hơn 02.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="content">
                                    <p>Trong cuộc sống hiện tại, sức khỏe tim mạch và hệ miễn dịch đóng vai trò vô cùng quan trọng trong việc bảo vệ cơ thể khỏi các bệnh tật và duy trì một cuộc sống năng động. Để giữ cho trái tim khỏe mạnh và hệ miễn dịch luôn sẵn sàng chống lại các tác nhân gây bệnh, việc lựa chọn những thực phẩm dinh dưỡng, an toàn và lành mạnh là điều không thể thiếu. Ngũ Cốc Enbesu, với sự kết hợp tinh tế từ các loại hạt dinh dưỡng và ngũ cốc chất lượng cao, là một giải pháp tuyệt vời giúp bạn chăm sóc sức khỏe tim mạch và củng cố hệ miễn dịch một cách hiệu quả.</p>
                                    <img src="../img/Ảnh Bài Viết Chọn Ngũ Cốc Enbesu Cho Sức Khỏe Tim Mạch Và Hệ Miễn Dịch Tốt Hơn 01.jpg" class="img-fluid" alt="">
                                    <h3 class="left">1. Dưỡng Chất Quan Trọng Cho Sức Khỏe Tim Mạch</h3>
                                    <p>
                                    Ngũ Cốc Enbesu chứa nhiều loại hạt và ngũ cốc giàu dinh dưỡng như hạt óc chó, mắc ca, hạnh nhân, yến mạch, hạt chia, hạt điều, hạt sen và các loại hạt đậu. Tất cả đều là những nguồn cung cấp chất béo không bão hòa lành mạnh, đặc biệt là omega-3 và omega-6. Những acid béo này đã được chứng minh là giúp giảm mức cholesterol xấu (LDL) trong máu và tăng cholesterol tốt (HDL), từ đó làm giảm nguy cơ mắc các bệnh tim mạch như xơ vữa động mạch và cao huyết áp. Không chỉ vậy, các loại hạt này còn chứa magie và kali, hai khoáng chất quan trọng giúp duy trì nhịp tim ổn định và huyết áp trong tầm kiểm soát.
                                    </p>
                                    <h3 class="left">2. Hỗ Trợ Giảm Viêm Và Cải Thiện Tuần Hoàn Máu</h3>
                                    <p>
                                    Viêm là một phản ứng tự nhiên của cơ thể khi bị tổn thương, nhưng viêm mãn tính có thể gây ra nhiều vấn đề sức khỏe nghiêm trọng, đặc biệt là cho tim mạch. Ngũ Cốc Enbesu chứa các chất chống oxy hóa mạnh mẽ như vitamin E, flavonoid và polyphenol có trong các loại hạt như hạnh nhân, óc chó và yến mạch. Những chất chống oxy hóa này không chỉ giúp giảm viêm mà còn cải thiện tuần hoàn máu, giữ cho các mạch máu luôn khỏe mạnh và linh hoạt, ngăn ngừa cục máu đông và bảo vệ tim khỏi những tổn thương tiềm ẩn.
                                    </p>
                                    <h3 class="left">3. Tăng Cường Hệ Miễn Dịch Với Dinh Dưỡng Từ Thiên Nhiên</h3>
                                    <p>
                                    Một hệ miễn dịch khỏe mạnh là tuyến phòng thủ đầu tiên của cơ thể chống lại các tác nhân gây bệnh từ môi trường bên ngoài. Ngũ Cốc Enbesu cung cấp một lượng lớn các vitamin và khoáng chất thiết yếu như vitamin C, vitamin E, kẽm và sắt từ các loại hạt và ngũ cốc. Đặc biệt, hạt chia và hạt sen trong sản phẩm là nguồn cung cấp kẽm tự nhiên, giúp tăng cường chức năng của các tế bào miễn dịch và bảo vệ cơ thể khỏi các vi khuẩn và virus gây bệnh. Ngoài ra, chất xơ có trong yến mạch và các loại hạt khác còn hỗ trợ đường ruột khỏe mạnh, nơi chứa một phần lớn hệ miễn dịch của cơ thể.
                                    </p>
                                    <h3 class="left">4. Chống Lại Gốc Tự Do Và Bảo Vệ Tế Bào</h3>
                                    <p>
                                    Gốc tự do là những phân tử không ổn định được tạo ra trong quá trình trao đổi chất hoặc do tác động của môi trường như ô nhiễm, khói thuốc lá, và tia UV. Chúng có thể gây tổn thương tế bào và góp phần vào quá trình lão hóa, cũng như gây ra nhiều bệnh lý khác. Ngũ Cốc Enbesu chứa nhiều chất chống oxy hóa từ các loại hạt dinh dưỡng như hạt mắc ca, hạt chia và hạnh nhân, giúp trung hòa các gốc tự do và bảo vệ tế bào khỏi bị hư hại. Điều này không chỉ giúp cơ thể chống lại các bệnh mãn tính mà còn giữ cho làn da mịn màng và tươi trẻ hơn. 
                                    </p>
                                    <h3 class="left">5. Duy Trì Sức Khỏe Tinh Thần Và Giảm Căng Thẳng</h3>
                                    <p>Sức khỏe tinh thần cũng có ảnh hưởng lớn đến sức khỏe tổng thể, đặc biệt là sức khỏe tim mạch và hệ miễn dịch. Ngũ Cốc Enbesu giàu magie và tryptophan, hai chất dinh dưỡng giúp cải thiện tâm trạng và giảm căng thẳng. Magie giúp thư giãn cơ bắp và thần kinh, giảm nguy cơ co thắt mạch máu và các cơn đau đầu do căng thẳng. Tryptophan, một amino acid có trong hạt sen và hạt điều, là tiền chất của serotonin - một chất dẫn truyền thần kinh quan trọng giúp cải thiện tâm trạng và giấc ngủ.</p>
                                    <p class="text-center alert-heading">Việc chăm sóc sức khỏe tim mạch và hệ miễn dịch không chỉ là một quá trình ngắn hạn mà là một hành trình dài hạn cần sự kiên nhẫn và chế độ dinh dưỡng hợp lý. Ngũ Cốc Enbesu với thành phần từ thiên nhiên, không chỉ cung cấp đầy đủ dưỡng chất mà còn hỗ trợ giảm viêm, chống lại gốc tự do và cải thiện sức khỏe tinh thần. Hãy lựa chọn Ngũ Cốc Enbesu làm người bạn đồng hành trong hành trình chăm sóc sức khỏe của bạn, để tận hưởng một cuộc sống khỏe mạnh và tràn đầy năng lượng.</p>
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