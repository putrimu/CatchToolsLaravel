<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Catch Tools Rent</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
</head><!--/head-->

<style type="text/css">
     <style type="text/css">
        .paymentWrap {
    padding: 50px;
}

.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}

.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}

.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("http://citinewslive.com/wp-content/uploads/2017/01/cash-handed-over.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_266x142.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("http://www.theindependentbd.com/assets/news_images/bkash.jpg");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("https://cdn0.iconfinder.com/data/icons/50-payment-system-icons-2/480/Payza.png");
}

.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("http://www.busbooking.lk/img/carousel/BusBooking.lk_ezCash_offer.png");
}


.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}
    </style>
</style>

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +622 858 6130 5756</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i>admin@catchtools.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/')}}"><img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                   Indonesia
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Indonesia</a></li>

                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    Rupiah
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Rupiah</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Akun</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Suka</a></li>
                <?php $customer_id=Session::get('customer_id');
                      $shipping_id=Session::get('shipping_id');
                ?>

                     <?php if($customer_id ==NULL && $shipping_id==NULL){?>
                            <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Bayar</a></li>
                        <?php }if($customer_id !=NULL && $shipping_id==NULL){?>
                              <li><a href="{{URL::to('/checkout')}}">Bayar</a></li>
                        <?php }if($customer_id !=NULL && $shipping_id!=NULL){?>
                               <li><a href="{{URL::to('/payment')}}">Bayar</a></li>
                        <?php }else{}?>


                                <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Keranjang Sewa</a></li>
                           
                           
                          
                            <?php if($customer_id != NULL){?>
                                <li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Keluar</a></li>
                          <?php  }else{?>
                            
                                <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Masuk</a></li>
                          <?php } ?>

                           
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/')}}" class="active">Beranda</a></li>
                                <li class="dropdown"><a href="#"> Sewa<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Produk</a></li>
                                        <li><a href="product-details.html">Detail Produk</a></li> 
                                       <?php $customer_id=Session::get('customer_id'); ?>
                     <?php if($customer_id != NULL){?>
                            <li><a href="{{URL::to('/checkout')}}"> Bayar</a></li>
                      <?php  }else{?>
                             <li><a href="{{URL::to('/login-check')}}"> Bayar</a></li>
                        <?php } ?>
                                        <li><a href="{{URL::to('/show-cart')}}">Keranjang Sewa</a></li> 
                                        
                                    </ul>
                                </li> 
                                




                                

                                </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <?php $all_published_slider=DB::table('tbl_slider')
                                ->where('publication_status',1)
                                ->get(); 
                           
                                ?>

 @yield('slider');
 

        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Kategori</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                             <div class="panel panel-default">
                         <?php
                           $all_published_category=DB::table('tbl_category')
                                                  ->where('publication_status',1)
                                                  ->get();
                            foreach($all_published_category as $v_category){?>                    
                             <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                                </div>
                            </div>
                        
                         <?php } ?> 
                           </div><!--/category-products-->
                      </div>
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                         <?php
                           $all_published_manufacture=DB::table('tbl_manufacture')
                                                  ->where('publication_status',1)
                                                  ->get();
                            foreach($all_published_manufacture as $v_manufacture){?> 

                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> <span class="pull-right"></span>{{$v_manufacture->manufacture_name}}</a></li>
                         <?php } ?>   
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Rentang Harga</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">Rp 0</b> <b class="pull-right">Rp 1000000</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="images/home/shipping.jpg" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                       @yield('content')
                   </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Catch Tools</span> Rent</h2>
                            <p>Catch Tools Rent menyediakan berbagai barang untuk di sewakan</p>
                        </div>
                    </div>
                        
                        
                        
                    <div " class="col-sm-3">
                        <div class="address"> 
                            <img src="{{URL::to('frontend/images/home/map.png')}}" alt="" />
                            <p>Jl. Raya Desa Cipadung,Cipadung, Cibiru, Bandung, Jawa Barat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Servis</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Bantuan Online</a></li>
                                <li><a href="#">Hubungi Kami</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Sewa</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Furniture</a></li>
                                <li><a href="#">Properti</a></li>
                                <li><a href="#">Keperluan Pribadi</a></li>
                                <li><a href="#">Rumah Tangga</a></li>
                                <li><a href="#">Hobi dan Olahraga</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2> Ketentuan</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Ketentuan Pengguna</a></li>
                                <li><a href="#">Kebijakan Privasi</a></li>
                                <li><a href="#">Kebijakan Pengembalian</a></li>
                                <li><a href="#">Sistem Pembayaran</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Tentang Catch Tools</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Informasi Layanan</a></li>
                                <li><a href="#">Karir</a></li>
                                <li><a href="#">Lokasi</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Catch Toolsr</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Dapatkan update terbaru <br />dari site Catch Tools.</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2018 Catch Tools Rent . All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="https://putrimariah.000webhostapp.com/">Putri's</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.j')}}s"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>
</html>