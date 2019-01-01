@extends('layout')
@section('content')     
   <div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($product_by_details->product_image)}}" alt="" />
								
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$product_by_details->product_name}}</h2>
								<p>Color: {{$product_by_details->product_color}}</p>
								<img src="{{URL::to('frontend/images/product-details/rating.png')}}" alt="" />
								<span>
									<span>Rp {{$product_by_details->product_price}}</span>
									<form action="{{url('/add-to-cart')}}" method="post">
										{{ csrf_field() }}
										<label>Quantity:</label>
										<input name="qty" type="text" value="1" />
										<input type="hidden" name="product_id" value="{{$product_by_details->product_id}}">
										<button type="submit" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Masukkan Ke Keranjang
										</button>
									</form>
								</span>
								<p><b>Status:</b> Barang Tersedia</p>
								
								<p><b>Brand:</b> {{$product_by_details->manufacture_name}}</p>
								<p><b>Category:</b> {{$product_by_details->category_name}}</p>
								<p><b>Jumlah Barang</b> {{$product_by_details->product_size}}</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								
								<li class="active"><a href="#reviews" data-toggle="tab">Syarat Penyewaan</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
						   <p>{{$product_by_details->product_long_description}}</p>
							</div>

							<div class="tab-pane fade" id="companyprofile" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
									</ul>
									<p>Aturan penyewaan di Catch Tools.</p>
									<p>Menyerahkan KTP sebagai jaminan saat pengambilan barang, yang akan dikembalikan setelah penyewa mengembalikan barang yang telah selesai disewa.</p>
									<p>Penyewa telah melunasi pembayaran yang tertera di web saat pengambilan barang yang terhitung sebagai peminjaman satu hari</p>
									<p>Pengembalian barang dihitung per 24 jam. Jika melebihi batas waktu maka terhitung peminjaman di hari berikutnya dan akan dibayarkan sisanya saat pengembalian barang di kalkulasikan dengan sisa hari yang belum terbayarkan.</p>
									<p><b>Catch Tools</b></p>
									
									
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
		
    
   
    
    


@endsection