<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Maknoon Lifestyle</title>


    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/logo/favicon/site.webmanifest">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">


    <link rel="stylesheet" href="assets/css/header-css/reset.min.css">

    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/easyzoom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">


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
                            <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
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
                                            <img src="{{url('photos/'.$catagory->image)}}" loading="lazy" alt="Product Images">
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
                        <li class="shop-cart">
                            <!--onclick="openNav()"-->
                            <a href="{{route('shoppingCart')}}"><i class="fa fa-shopping-bag" style="font-size: 20px;"></i> </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>

                                <hr>
                                <div class="mini-cart">
                                    <div class="mini-cart-body">
                                        <div class="single-cart-item d-flex">
                                            <figure class="product-thumb">
                                                <a href="#"><img class="img-fluid" src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
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
                                                <a href="#"><img class="img-fluid" src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
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
                                                <a href="#"><img class="img-fluid" src="assets/img/product/panjabi/p1.jpg" alt="Products" /></a>
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

    <div class="container">


        <div class="row p-tb-60" style="padding-top: 164px;">
            <div class="col-md-4 order-md-2 mb-4 cart">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                   
                </h4>
                @if($cart)
                <ul class="list-group mb-3">


                    @foreach($cart as $item)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{$item->name}}</h6>
                        </div>
                        <span class="text-muted">{{$item->price}}</span>
                    </li>
                    @endforeach

                   
                   <li class="list-group-item d-flex justify-content-between location">
                    <span>Shipping (BDT)</span>
                    <span></span>
                    </li>
                   

                    <li class="list-group-item d-flex justify-content-between subTotal">
                        <span>Sub Total (BDT)</span>
                        <span>{{$subTotal}}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between grandTotal">
                        <span>Grand Total (BDT)</span>
                        <span>{{$subTotal}}</span>
                    </li>
                </ul>
                @endif


            </div>
            <div class="col-md-8 order-md-1 billing">
                <h4 class="mb-3">Billing address</h4>
                <form  method="POST" action="{{route('checkout')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text"  name="name" id="name" class="form-control" placeholder="" value="" required />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" id="lastName" class="form-control" placeholder="" value="" required />
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    
                    
                    <div class="mb-3">
                        <label for="phone">Phone</label>
                        <input type="text"  name="phone" id="phone"  class="form-control" required />
                        <div class="invalid-feedback">
                            Please enter a valid phone number for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email"  name="email" id="email"  class="form-control" placeholder="you@example.com" required />
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        
                        <label for="location">Choose location </label>

                            <select name="location" id="location" class="btn btn-success location" required>
                                <option value=""></option>
                                <option value="1">Inside Dhaka</option>
                                <option value="0">Outside Dhaka</option>
                            </select>

                        
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="1234 Main St" required />
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="state">City</label>
                            <select class="custom-select d-block w-100" name="city" id="city" required>
                                <option value="">Choose...</option>
                                <option>Dhaka</option>
                                <option>Narayanganj</option>
                                <option>Gazipur</option>
                                <option>Barishal</option>
                                <option>Kushtia</option>
                                <option>Rajshahi</option>
                                <option>Sylhet</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text"  name="zip" id="zip" class="form-control" placeholder="" required />
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>



                    <button class="btn btn-primary btn-lg btn-block checkout-btn" type="submit"> Continue to checkout </button>



                </form>
            </div>
        </div>



        <!---=====jquery====-->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <!--=====popper js=====-->
        <script src="assets/js/popper.min.js"></script>
        <!--=====bootstrap=====-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--=====Owl carousel=====-->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!--=====header script=====-->
        <script src="assets/js/script.js"></script>
        <!--=====header script=====-->
        <script src="assets/js/main.js"></script>
       

           <script type="text/Javascript">
       $(".location").on("change", function() {
        var $select = $(this);
        var value = $select.val();
        
        if(value == 1){
            var locationLi = $select.parents(".billing").prev().find("li.location");
            locationLi.find("span:odd").text("80");
            let subTotal = parseInt($select.parents(".billing").prev().find("li.subTotal").find("span:odd").text());
            let grandTotal = subTotal + 80;
            $select.parents(".billing").prev().find("li.grandTotal").find("span:odd").text(grandTotal);
        }
        else{
            var locationLi = $select.parents(".billing").prev().find("li.location");
            locationLi.find("span:odd").text("150");
            let subTotal = parseInt($select.parents(".billing").prev().find("li.subTotal").find("span:odd").text());
            let grandTotal = subTotal + 150;
            $select.parents(".billing").prev().find("li.grandTotal").find("span:odd").text(grandTotal);
        }

        

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