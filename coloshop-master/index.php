<?php
// index.php
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Quang Béo Cakes</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Mẫu trang web Quang Béo Cakes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">
    <?php include 'inc/header.php'; ?>
    <?php include 'inc/slider.php'; ?>

    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(images/banner1.jpg)">
                        <div class="banner_category">
                            <a href="categories.html">Bánh ngọt</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(images/banner2.jpg)">
                        <div class="banner_category">
                            <a href="categories.html">Phụ kiện bánh</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner_item align-items-center" style="background-image:url(images/banner3.png)">
                        <div class="banner_category">
                            <a href="categories.html">Combo quà tặng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Arrivals -->
    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Sản phẩm mới</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">Tất cả</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Bánh ngọt</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">Phụ kiện bánh</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Combo quà tặng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                        <!-- Product 1 -->
                        <div class="product-item men">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="images/banh1.webp" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50k</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh kem dâu tây 16cm</a></h6>
                                    <div class="product_price">450.000đ<span>500.000đ</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 2 -->
                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh2.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>Mới</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh cupcake socola 12 chiếc</a></h6>
                                    <div class="product_price">300.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 3 -->
                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh3.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh mì ngọt nhân phô mai</a></h6>
                                    <div class="product_price">50.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 4 -->
                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh4.webp" alt="">
                                </div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>Giảm giá</span></div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Hộp quà bánh quy socola</a></h6>
                                    <div class="product_price">200.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 5 -->
                        <div class="product-item women men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh5.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Combo bánh sinh nhật và hoa</a></h6>
                                    <div class="product_price">600.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 6 -->
                        <div class="product-item accessories">
                            <div class="product discount product_filter">
                                <div class="product_image">
                                    <img src="images/banh6.webp" alt="">
                                </div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50k</span></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh kem dâu tây 16cm</a></h6>
                                    <div class="product_price">450.000đ<span>500.000đ</span></div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 7 -->
                        <div class="product-item women">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh7.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh cupcake socola 12 chiếc</a></h6>
                                    <div class="product_price">300.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 8 -->
                        <div class="product-item accessories">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh8.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Bánh mì ngọt nhân phô mai</a></h6>
                                    <div class="product_price">50.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 9 -->
                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh9.webp" alt="">
                                </div>
                                <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>Giảm giá</span></div>
                                <div class="favorite favorite_left"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Hộp quà bánh quy socola</a></h6>
                                    <div class="product_price">200.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                        <!-- Product 10 -->
                        <div class="product-item men">
                            <div class="product product_filter">
                                <div class="product_image">
                                    <img src="images/banh10.webp" alt="">
                                </div>
                                <div class="favorite"></div>
                                <div class="product_info">
                                    <h6 class="product_name"><a href="single.html">Combo bánh sinh nhật và hoa</a></h6>
                                    <div class="product_price">600.000đ</div>
                                </div>
                            </div>
                            <div class="red_button add_to_cart_button"><a href="#">Thêm vào giỏ</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deal of the week -->
    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="images/deal_ofthe_week.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Ưu đãi của tuần</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Ngày</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Giờ</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Phút</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Giây</div>
                            </li>
                        </ul>
                        <div class="red_button deal_ofthe_week_button"><a href="#">Mua ngay</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->
    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Sản phẩm bán chạy</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div class="owl-carousel owl-theme product_slider">
                            <!-- Slide 1 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item">
                                    <div class="product discount">
                                        <div class="product_image">
                                            <img src="images/banh1.webp" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50k</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh kem dâu tây 16cm</a></h6>
                                            <div class="product_price">450.000đ<span>500.000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh2.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>Mới</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh cupcake socola 12 chiếc</a></h6>
                                            <div class="product_price">300.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh3.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh mì ngọt nhân phô mai</a></h6>
                                            <div class="product_price">50.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 4 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh4.webp" alt="">
                                        </div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>Giảm giá</span></div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Hộp quà bánh quy socola</a></h6>
                                            <div class="product_price">200.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 5 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh5.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Combo bánh sinh nhật và hoa</a></h6>
                                            <div class="product_price">600.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 6 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product discount">
                                        <div class="product_image">
                                            <img src="images/banh6.webp" alt="">
                                        </div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-50k</span></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh kem dâu tây 16cm</a></h6>
                                            <div class="product_price">450.000đ<span>500.000đ</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 7 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item women">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh7.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh cupcake socola 12 chiếc</a></h6>
                                            <div class="product_price">300.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 8 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item accessories">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh8.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Bánh mì ngọt nhân phô mai</a></h6>
                                            <div class="product_price">50.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 9 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh9.webp" alt="">
                                        </div>
                                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>Giảm giá</span></div>
                                        <div class="favorite favorite_left"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Hộp quà bánh quy socola</a></h6>
                                            <div class="product_price">200.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 10 -->
                            <div class="owl-item product_slider_item">
                                <div class="product-item men">
                                    <div class="product">
                                        <div class="product_image">
                                            <img src="images/banh10.webp" alt="">
                                        </div>
                                        <div class="favorite"></div>
                                        <div class="product_info">
                                            <h6 class="product_name"><a href="single.html">Combo bánh sinh nhật và hoa</a></h6>
                                            <div class="product_price">600.000đ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Navigation -->
                        <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefit -->
    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Miễn phí vận chuyển</h6>
                            <p>Cho đơn hàng từ 500k trở lên</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Thanh toán khi nhận hàng</h6>
                            <p>Áp dụng toàn quốc</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Đổi trả trong 7 ngày</h6>
                            <p>Đảm bảo chất lượng sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>Mở cửa cả tuần</h6>
                            <p>8h sáng - 9h tối</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs -->
    <div class="blogs">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Bài viết mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_1.jpg)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng bánh ngọt nổi bật mùa thu này</h4>
                            <span class="blog_meta">bởi admin | 01/12/2017</span>
                            <a class="blog_more" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_2.jpg)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng bánh ngọt nổi bật mùa thu này</h4>
                            <span class="blog_meta">bởi admin | 01/12/2017</span>
                            <a class="blog_more" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(images/blog_3.jpg)"></div>
                        <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng bánh ngọt nổi bật mùa thu này</h4>
                            <span class="blog_meta">bởi admin | 01/12/2017</span>
                            <a class="blog_more" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Đăng ký nhận tin</h4>
                        <p>Đăng ký để nhận thông tin mới nhất và giảm giá 20% cho đơn hàng đầu tiên</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="post">
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="Email của bạn" required="required" data-error="Email hợp lệ là bắt buộc.">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/footer.php'; ?>
</div>
</body>
</html>