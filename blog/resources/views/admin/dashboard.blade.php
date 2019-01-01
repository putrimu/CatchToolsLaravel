@extends('admin_layout')
@section('admin_content')
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Dashboard</a></li>
	</ul>

	 <div class="text-center">
                            <img src="{{URL::to('frontend/images/home/logo.png')}}" alt="" />
                        </div>

	<h1 class="title text-center">Hai {{ Session::get('admin_name')}} Selamat Datang Di Admin Site</h1>


@endsection