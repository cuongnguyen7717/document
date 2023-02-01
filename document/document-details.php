<?php
require 'dashboard/db_conn.php';
session_start();
if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
}
$sql = mysqli_query($links, "SELECT * FROM document WHERE idd = '$idd' ");
$item = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài liệu </title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Đăng nhập</a>
                <a href="#">FAQs</a>
            </div>
      
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
          
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
        
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Thông báo: Có rất nhiều tài liệu mới cập nhật đang chờ bạn !</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Hỗ trợ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Trang Chủ</a></li>
                   
                            <li><a href="#">Khác</a>
                                <ul class="dropdown">
                                    <li><a href="./about.php">Về Chúng Tôi</a></li>
                                  
                                </ul>
                            </li>
                            <li  class="active" ><a href="./document.php">Tài liệu</a></li>
                            <li><a href="./contact.php">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="wishlist.php"><img src="img/icon/heart.png" alt=""></a>
                     
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <section class="breadcrumb-blog set-bg" data-setbg="img/home/wallpapersden.com_xbox-series-x-controller_3840x2160.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tin Tức</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Tài liệu</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang Chủ</a>
                            <span>Đọc thêm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <?php
require 'dashboard/db_conn.php';
session_start();
if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
}
$sql = mysqli_query($links, "SELECT * FROM document WHERE idd = '$idd' ");
$item = mysqli_fetch_array($sql);
?>

    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__item"> 
                        <h2>
                        <?php echo $item[1] ?>
                        </h2>
                    </div>
                    <div class="about__pic">
                    <img src="dashboard/document/img/<?php echo $item['img']; ?>" >
                    </div>
                </div>
            </div>
            <div class="row">
            <div style=" text-align: justify;" class="about__item"> 
                        <p style="font-size:20px">
                       &emsp; <?php echo $item['content'] ?>
                        </p>
                    </div>
            </div>
            <div style="text-align: end;" class="about__item"> 
                        <p style="font-size:25px">
                        <a type="button" href="dashboard\document\download.php?file=C:\xampp\htdocs\document\dashboard\file\<?php echo urlencode($item[4]); ?>" class="btn btn-success">Tải xuống</a>
                        </p>
                    </div>
            </div>
        </div>

    </section>
    <section class="blog spad">
        <div class="container">
        <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tài liệu liên quan</span>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="https://insight.isb.edu.vn/wp-content/uploads/sites/2/2019/11/data-mining-thumbnail.png"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 TH9 2022</span>
                                <h5>Tài liệu Khai phá dữ liệu</h5>
                                <a href="#">Đọc Thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="https://khudothivinhomes.com.vn/wp-content/uploads/2020/12/b%E1%BA%A3n-%C4%91%E1%BB%93-h%C3%A0nh-ch%C3%ADnh-h%C3%A0-n%E1%BB%99i.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 TH9 2022</span>
                            <h5>Văn bản hành chính</h5>
                            <a href="#">Đọc Thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="https://hoadonxacthuc.com.vn/wp-content/uploads/2022/04/fdsadfsa.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 TH9 2022</span>
                            <h5>Hóa đơn điện tử</h5>
                            <a href="#">Đọc Thêm</a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
    </section>
<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="index.php"><img src="img/Logo_1.png" alt=""></a>
                        </div>
                        <p>Cùng chia sẻ kinh nghiệm quản lý tài liệu</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Ứng dụng</h6>
                        <ul>
                            <li><a href="#">Quản lý tài liệu</a></li>
                            <li><a href="#">Quản lý tài chính</a></li>
                            <li><a href="#">Tiền tệ</a></li>
                            <li><a href="#">Hành chính</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Tài liệu</h6>
                        <ul>
                            <li><a href="#">Giáo dục</a></li>
                            <li><a href="#">Khoa học</a></li>
                            <li><a href="#">Công nghệ</a></li>
                            <li><a href="#">Toán học</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>Nhận thông tin nhanh</h6>
                        <div class="footer__newslatter">
                            <p>Nhận thông tin tài liệu mới nhất từ trang</p>
                            <form action="#">
                                <input type="text" placeholder="Email của bạn">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <p>Copyright ©
                            Cường
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- Footer Section End -->
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Tìm kiếm sản phẩm.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>