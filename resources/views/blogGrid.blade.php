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
<div id="page-content" class="main-content">
    <!--Page Title-->
    <div class="page section-header text-center mb-0">
        <div class="page-title">
            <div class="wrapper">
                <h1 class="page-width">All Blog</h1>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <!--Main Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
               
                <div class="blog--list-view">
                    <div class="row">
                        <!-- Article Image -->
                        @if($blogs)
                        @foreach($blogs as $blog)
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 article mb-5">
                            <!-- Article Image -->
                            <a class="article_featured-image" href="{{url('/blog/'.$blog->id.'/view')}}"><img class="blur-up lazyload" data-src="{{url('photos/' . $blog->image)}}" src="{{url('photos/' . $blog->image)}}" alt=""></a>
                            <h2 class="h3"><a href="{{url('/blog/'.$blog->id.'/view')}}">{{$blog->title}}</a></h2>
                            <ul class="publish-detail">
                                
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">{{$blog->created_at->format('d M Y')}}</time></li>
                            </ul>
                            <div class="rte">
                                <?php
                                $blogModel = App\Models\Blog::find($blog->id);
                                $blogDesc = html_entity_decode($blogModel['description']);
                                $substringBlog = substr($blogDesc, 0, 200);
                                echo $substringBlog;
                                ?>
                            </div>
                            <p><a href="{{url('/blog/'.$blog->id.'/view')}}" class="btn btn-secondary btn--small">Read more <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr />
                   
                </div>
            </div>
            <!--End Main Content-->
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