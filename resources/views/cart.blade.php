<?php


 $contents = Cart::content();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>{{$title}}</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href="/main/assets/css/linearicons.css">
    <link rel="stylesheet" href="/main/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/main/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/main/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/main/assets/css/nice-select.css">
    <link rel="stylesheet" href="/main/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="/main/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/main/assets/css/main.css">
    <link rel="stylesheet" href="/admin_assets/assets/vendor/fonts/boxicons.css" />

</head>

<body>

    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="/main/assets/img/logo.png" alt="" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/categories">
                                    Category</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="checkout.html">Product Checkout</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/show_cart"> Cart</a>
                            </li>

                            </li>
                            <!-- <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-- <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="tracking.html">Tracking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="elements.html">Elements</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item">
                                <a href="/show_cart" class="cart"><span class="ti-bag"></span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <button class="search">
                                    <span class="lnr lnr-magnifier" id="search"></span>
                                </button>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Subtotal</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $content)

                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img class="imgsize" src="{{$content->options->image}}" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$content->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{number_format($content->price)}}</h5>
                                </td>
                                <form action="/update_cart" method="POST">
                                    @csrf
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="quanty" id="sst" maxlength="100"
                                                value="{{$content->qty}}" title="Quantity:" class="input-text qty">
                                            <button
                                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                class="increase items-count" type="button"><i
                                                    class="lnr lnr-chevron-up"></i></button>
                                            <button
                                                onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                class="reduced items-count" type="button"><i
                                                    class="lnr lnr-chevron-down"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>${{number_format($content->price * $content->qty)}}</h5>
                                    </td>
                                    <td>

                                        <a href="/delete_cart/{{$content->rowId}}" class="genric-btn danger">
                                            <i class='bx bx-trash'></i>
                                        </a>

                                        <input type="submit" value="Update" name="update" class="genric-btn success">
                                        <input value="{{$content->rowId}}" name="rowID_cart" type="hidden"
                                            class="form-control">

                                    </td>
                                </form>
                            </tr>


                            @endforeach
                            <tr>
                                <td>
                                    &ensp;
                                </td>
                                <td>
                                    &ensp;
                                </td>
                                <td>
                                    &ensp;
                                </td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">

                                        &ensp;
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <h5>Cart Sub Total</h5>
                                </td>
                                <td>
                                    <h5>${{Cart::subtotal()}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Tax</h5>
                                </td>
                                <td>
                                    <h5>${{Cart::tax()}}</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">

                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <h5>Free ship</h5>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <h5>Total</h5>
                                </td>
                                <td>
                                    <h5><b>${{Cart::total()}}</b></h5>
                                </td>
                            </tr>





                        </tbody>

                    </table>
                    <div class="checkout_btn_inner d-flex align-items-center">
                        <a class="genric-btn success-border" href="/categories">Continue Shopping</a>

                        <a class="genric-btn warning ml-4" href="/check_out">Proceed to checkout</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/i1.jpg" alt=""></li>
                            <li><img src="img/i2.jpg" alt=""></li>
                            <li><img src="img/i3.jpg" alt=""></li>
                            <li><img src="img/i4.jpg" alt=""></li>
                            <li><img src="img/i5.jpg" alt=""></li>
                            <li><img src="img/i6.jpg" alt=""></li>
                            <li><img src="img/i7.jpg" alt=""></li>
                            <li><img src="img/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="/main/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="/main/assets/js/vendor/bootstrap.min.js"></script>
    <script src="/main/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/main/assets/js/jquery.nice-select.min.js"></script>
    <script src="/main/assets/js/jquery.sticky.js"></script>
    <script src="/main/assets/js/nouislider.min.js"></script>
    <script src="/main/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/main/assets/js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="/main/assets/js/gmaps.min.js"></script>
    <script src="/main/assets/js/main.js"></script>
</body>

</html>