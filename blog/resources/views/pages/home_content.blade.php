@extends('layout')
@section('content')
@include('slider')
<h2 class="title text-center">barang</h2>
     <?php foreach($all_published_product as $v_published_product){?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL::to($v_published_product->product_image)}}" style="height: 300px;" alt="" />
                            <h2>Rp {{$v_published_product->product_price}} </h2>
                             <p>{{$v_published_product->product_name}}</p> 
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>Rp {{$v_published_product->product_price}} </h2>
                                <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><p>{{$v_published_product->product_name}}</p></a>
                                <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke keranjang</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Masukkan ke daftar suka</a></li>
                        
                        <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>Lihat Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
       <?php } ?>
     
    </div>

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">Barang Rekomendasi</h2>
        
        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">   
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                                    <h2>Rp 150000</h2>
                                    <p>Microwave</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend2.jpg')}}" alt="" />
                                    <h2>Rp 60000</h2>
                                    <p>Camera Canon</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend6.jpg')}}" alt="" />
                                    <h2>Rp 100000</h2>
                                    <p>Standing AC</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">  
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                    <h2>Rp 100000</h2>
                                    <p>PS 3</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend4.jpg')}}" alt="" />
                                    <h2>Rp 35000</h2>
                                    <p>Koper</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend5.jpg')}}" alt="" />
                                    <h2>Rp 10000</h2>
                                    <p>Canddle Lamp</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>          
        </div>
    </div><!--/recommended_items-->


@endsection