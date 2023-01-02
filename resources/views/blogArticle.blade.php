
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Maknoon Lifestyle</title>

    <!---===========favicon=====-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/img/logo/favicon/site.webmanifest')}}">

    <!--======== Bootstrap 4.6===-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!--======== font awesome===-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <!---======= owl carousel======-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">

    <!---======= Header css-->
    <link rel="stylesheet" href="{{ asset('assets/css/header-css/reset.min.css')}}">
    <!---==========zoom css=========-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/easyzoom.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">


</head>


<body class="pattern-bg">
      <!----===============header start===============-->
      <header class="header" id="header-area">
        <div class="container">
            <section class="wrapper">
            <!----------------dynamic logo---------------->
                <div class="header-item-left">
                    <a href="{{route('welcome')}}" class="brand">
                        <img src="{{url('photos/'. $logo->image)}}" alt="logo not found">
                    </a>
                </div>
            <!------------daynamic navigation bar-------------------->
                <div class="header-item-center">
                    <div class="overlay"></div>
                    <nav class="menu" id="menu">
                        <div class="menu-mobile-header">
                            <button type="button" class="menu-mobile-arrow"><i
                                    class="ion ion-ios-arrow-back"></i></button>
                            <div class="menu-mobile-title"></div>
                            <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                        </div>
                        <ul class="menu-section mb-0">
                        <li class="menu-item-has-children">
                                <a href="#">Products <i class="fas fa-chevron-down"></i> </a>
                                <div class="menu-subs menu-mega menu-column-4">
                                @foreach($catagories as $catagory)
                                @if($catagory->status == "enable")
                                    <div class="list-item text-center">
                                        <a href="{{'/catagory/' . $catagory->id}}">
                                            <img src="{{url('photos/'.$catagory->image)}}" loading="lazy"
                                                alt="Product Images">
                                            <h4 class="title">{{$catagory->catagoryName}}</h4>
                                        </a> 
                                    </div>
                                    @endif
                                @endforeach
                                </div>
                            </li>

                            @foreach($navigation as $navItem)
                            @if($navItem->status == "enable")
                            <li class="menu-item"><a href="{{$navItem->url}}">{{$navItem->title}}</a></li>
                            @endif
                            @endforeach

                           
                        </ul>
                    </nav>
                </div>

            <!-------------search, mini cart,sidenav---------------->
                <div class="header-right-meta text-right header-item-righ">
                    <ul>
                        <li><a href="#" class="modal-active"><i class="fa fa-search"></i></a></li>
                        <li class="settings"><a href="#"><i class="fas fa-user"></i></a>
                            <div class="site-settings d-block d-sm-flex">
                                <dl class="my-account">
                                    <dt>My Account</dt>
                                    <dd><a href="{{route('dashboard')}}">Profile</a></dd>
                                    <dd><a href="{{'/login'}}">Sign</a></dd>
                                </dl>
                            </div>
                        </li>
                        <li class="shop-cart">                                       <!--onclick="openNav()"-->
                        <a href="{{route('shoppingCart')}}"><i class="fa fa-shopping-bag" style="font-size: 20px;" ></i> </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>

                                <hr>
                                <div class="mini-cart">
                                    <div class="mini-cart-body">
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>

                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid"
                                                        src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
                                            </figure>
                                            <div class="product-details">
                                                <h2><a href="#">Sprite Yoga Companion</a></h2>
                                                <div class="cal d-flex justify-content-between align-items-center">
                                                    <div class="size d-flex">
                                                        <span class="font-weight-normal mr-1">Size: </span>
                                                        <span class="">XL</span>
                                                    </div>
                                                    <div class="price-part tk-part">
                                                        <span class="tk-sign">20,000</span>
                                                    </div>
                                                </div>
                                                <div class="pro-quantity">
                                                    <div class="product-count">
                                                        <form action="#" class="display-flex">
                                                            <div class="increment-wrapper">
                                                                <input type="text" value="1">
                                                                <button class="button-qty inc">
                                                                    <i class="fas fa-sort-up"></i></button>
                                                                <button class="button-qty dec">
                                                                    <i class="fas fa-sort-down"></i></span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="remove-icon"><i class="far fa-trash-alt"></i></a>
                                        </div>


                                        <div class="cart-subtotal">
                                            <span>Cart Subtotal</span>
                                            <span class="subtotal-price tk-sign">30000</span>
                                        </div>
                                    </div>
                                    <div class="mini-cart-footer">
                                        <a href="{{route('shoppingCart')}}" class="btn-add-to-cart mb-2">View Cart</a>
                                        <a href="checkout.html" class="btn-add-to-cart">Checkout</a>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
                <button type="button" class="menu-mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </section>
        </div>
    </header>
    <!---====================== header end================-->

    <!--== Search Box Area Start ==-->
    <div class="body-popup-modal-area">
        <span class="modal-close"><img src="assets/img/cancel.png" alt="Close" class="img-fluid" /></span>
        <div class="modal-container d-flex">
            <div class="search-box-area">
                <div class="search-box-form">
                    <form action="#" method="post">
                        <input type="search" placeholder="type keyword and hit enter" />
                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--== Search Box Area End ==-->   

        <!--Body Content-->
        <div id="page-content">
            <!--Page Title-->
            <div class="page section-header text-center mb-0">
                <div class="page-title">
                    <div class="wrapper">
                        <h1 class="page-width">Blog Article</h1>
                    </div>
                </div>
            </div>
            <!--End Page Title-->
            <div class="bredcrumbWrap">
                <div class="container breadcrumbs">
                    <a href="index.html" title="Back to the home page">Home</a><span aria-hidden="true">›</span>
                    <a href="blog-left-sidebar.html" title="Back to News">News</a><span aria-hidden="true">›</span><span>Blog Article</span>
                </div>
            </div>
            <div class="container main-content">
                <div class="row">
                    <!--Main Content-->
                    <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                        <div class="blog--list-view">
                           @if($blog)
                           <div class="article">
                                <!-- Article Image -->
                                <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{url('photos/' . $blog->image)}}" src="{{url('photos/' . $blog->image)}}" alt="It's all about how you wear"></a>
                                <h1><a href="blog-left-sidebar.html">{{$blog->title}}</a></h1>
                                <ul class="publish-detail">
                                    
                                    <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">{{$blog->created_at->format('d M Y')}}</time></li>
                                    <li>
                                        <ul class="inline-list">
                                            
                                        </ul>
                                    </li>
                                </ul>
                                <div class="rte">
                                <?php
                                $blogDesc = html_entity_decode($blog['description']);
                                echo $blogDesc;
                                ?>
                                </div>
                                <hr/>
                               
                               
                            </div>
                           @endif
                            <!----
                            <div class="formFeilds contact-form form-vertical">
                                <form method="post" action="#" id="comment_form" accept-charset="UTF-8" class="comment-form">
                                    <h2>Leave a comment</h2>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="ContactFormName" name="contact[name]" placeholder="Name" value="" required="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="ContactFormEmail" name="contact[email]" placeholder="Email" value="" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea required="" rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <p class="fine-print">Please note, comments must be approved before they are published</p>
                                            <input type="submit" class="btn" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            ---->
                        </div>
                    </div>
                    <!--End Main Content-->
                    <!--Sidebar-->
                    <!--
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                        <div class="sidebar_tags">
                            <div class="sidebar_widget categories">
                                <div class="widget-title">
                                    <h2>Category</h2>
                                </div>
                                <div class="widget-content">
                                    <ul class="sidebar_categories">
                                        <li class="lvl-1 "><a href="http://annimexweb.com/" class="site-nav lvl-1">Beauty</a></li>
                                        <li class="lvl-1  active"><a href="#" class="site-nav lvl-1">fashion</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">summer</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">trend</a></li>
                                        <li class="lvl-1 "><a href="#" class="site-nav lvl-1">winter</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-1.jpg" src="assets/images/blog/blog-post-sml-1.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">It's all about how you wear</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-2.jpg" src="assets/images/blog/blog-post-sml-2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">27 Days of Spring Fashion Recap</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-3.jpg" src="assets/images/blog/blog-post-sml-3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">How to Wear The Folds Trend Four Ways</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/blog/blog-post-sml-4.jpg" src="assets/images/blog/blog-post-sml-4.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Accusantium doloremque</a>
                                                        <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2017</time> </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar_widget static-banner">
                                <img src="assets/images/side-banner-2.jpg" alt="">
                            </div>
                            <div class="sidebar_widget">
                                <div class="widget-title">
                                    <h2>Trending Now</h2>
                                </div>
                                <div class="widget-content">
                                    <div class="list list-sidebar-products">
                                        <div class="grid">
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#">
                                                            <img class="grid-view-item__image blur-up lazyload" data-src="assets/images/product-images/mini-product-img.jpg" src="assets/images/product-images/mini-product-img.jpg" alt="" />
                                                        </a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/product-images/mini-product-img1.jpg" src="assets/images/product-images/mini-product-img1.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/product-images/mini-product-img2.jpg" src="assets/images/product-images/mini-product-img2.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid__item">
                                                <div class="mini-list-item">
                                                    <div class="mini-view_image">
                                                        <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="assets/images/product-images/mini-product-img3.jpg" src="assets/images/product-images/mini-product-img3.jpg" alt="" /></a>
                                                    </div>
                                                    <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                                        <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
-->
                    <!--End Sidebar-->

                </div>
            </div>

        </div>
        <!--End Body Content-->
  <!--===============Footer start=============-->
  <footer class="d-flex-column" style="border-top: 1px solid #c5c5c5;">
        <div class="container container-xxl text-left p-tb-60 ">
            <div class="row   text-center">
                <hr class="clearfix w-100 d-md-none mb-0">
                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">CUSTOMER CARE</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Product" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">CUSTOMER CARE
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link d-md-block list-unstyled collapse" id="Product">
                        <ul class="center-text">
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                            <li>
                                <a href="#">FAQS</a>
                            </li>
                            <li>
                                <a href="#">Size guide</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">SHIPPING INFO</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Company" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">SHIPPING INFO
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link list-unstyled collapse" id="Company">
                        <ul class="center-text">
                            <li>
                                <a href="#">Shipping information</a>
                            </li>
                            <li>
                                <a href="#">return policy</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="my-2 font-footer font-weight-bold d-none d-md-block">ABOUT</h3>
                    </div>
                    <div class="d-md-none title" data-target="#Resources" data-toggle="collapse">
                        <div class="mt-3 font-weight-bold center-text">ABOUT
                            <div class="float-right navbar-toggler">
                                <i class="fas fa-angle-down"></i>
                                <i class="fas fa-angle-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link list-unstyled collapse" id="Resources">
                        <ul class="center-text">
                            <li>
                                <a href="#">our story</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="clearfix w-100 d-md-none mb-0">

                <div class="col-md-3 m-tb-10 shfooter">
                    <div class="footer-heading">
                        <h3 class="center-text font-footer my-2">FOLLOW US</h3>

                    </div>

                    <div class="pt-2 center-text">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Linkedin">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#!" class="sbtn btn-large mx-1" title="Youtube">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p class="mb-0">© All Right Reserved 2021. Developed By <a href="https://aveenirit.com/">Aveenir IT</a></p>
        </div>
    </footer>

    <!--===============Footer end=============-->


   <!----Jquery----->
   <script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--=====popper js=====-->
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <!--=====bootstrap=====-->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!--=====Owl carousel=====-->
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--=====header script=====-->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    <!--=====header script=====-->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script type="text/Javascript">

        $(".button-qty").click(function(e){
        e.preventDefault();

        var $button = $(this);
        var oldQuantity = $button.parent().find("input:even").val();
        var productId = $button.parent().find("input:odd").val();
        var productSku = $button.parent().prev().val();
        console.log(oldQuantity,productId,productSku);
        var newQuantity;
        $button.blur();
        if ($button.hasClass("inc")) {
            newQuantity = parseFloat(oldQuantity) + 1;
        } 
        else {
        if (oldQuantity > 1) {
            newQuantity = parseFloat(oldQuantity) - 1;
        } else {
            newQuantity = 1;
        }
        }
        

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            type:'POST',
            url:"{{ route('updateShoppingCart') }}",
            data:{productId:productId, newQuantity:newQuantity, productSku:productSku},
            success:function(data){
                var productPrice = $button.parents(".pro-quantity").prev().text();
                $button.parent().find("input:even").val(newQuantity);
                $button.parents(".pro-quantity").next().text(newQuantity * productPrice);

                var cart = JSON.parse(data.cart);
                var subTotal = cart.reduce(function(accumulator,currentItem){
                    return accumulator + (currentItem.qty * currentItem.price);
                },0);
                var grandTotal = subTotal ;
                //console.log(grandTotal);
                $button.parents(".cart-detail-row").next().find("td.sub-total").text(subTotal);
                $button.parents(".cart-detail-row").next().find("td.grand-total").text(grandTotal);
                
            }
        });

    
    });
      </script>
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            if ($(window).width() > 600) {
                document.getElementById("mySidenav").style.width = "23vw";

            } else {
                document.getElementById("mySidenav").style.width = "90vw";
            }
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";

        }
    </script>



</body>

</html>
        

