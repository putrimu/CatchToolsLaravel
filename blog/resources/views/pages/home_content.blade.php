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
                            <h2>{{$v_published_product->product_price}} Tk</h2>
                             <p>{{$v_published_product->product_name}}</p> 
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{$v_published_product->product_price}} Tk</h2>
                                <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><p>{{$v_published_product->product_name}}</p></a>
                                <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke keranjang</a>
                            </div>
                        </div>
                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_published_product->manufacture_name}}</a></li>
                        <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>Lihat Produk</a></li>
                    </ul>
                </div>
            </div>
        </div>
       <?php } ?>
     
    </div><!--features_items-->
    
    <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#elektronikdangedget" data-toggle="tab">Elektronik dan Gedget</a></li>
                <li><a href="#rt" data-toggle="tab">Rumah Tangga</a></li>
                <li><a href="#hobidanolahraga" data-toggle="tab">Hobi dan Olahraga</a></li>
                <li><a href="#furniture" data-toggle="tab">Furniture</a></li>
                <li><a href="#properti" data-toggle="tab">Properti</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="tshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Sewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="blazers" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="sunglass" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="kids" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="poloshirt" >
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery2.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery4.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery3.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('frontend/images/home/gallery1.jpg')}}" alt="" />
                                <h2>300000</h2>
                                <p>Barang untuk disewa</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/category-tab-->
    
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
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
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
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
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
                                    <img src="{{URL::to('frontend/images/home/recommend1.jpg')}}" alt="" />
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
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
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Masukkan ke Keranjang</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{URL::to('frontend/images/home/recommend3.jpg')}}" alt="" />
                                    <h2>300000</h2>
                                    <p>Barang untuk disewa</p>
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