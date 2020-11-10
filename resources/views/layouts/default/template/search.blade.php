@extends('layouts.default.master')
@section('content')
<style>
    @media screen and (max-device-width: 767px){
        .myrow_column h3, .myrow_column p{
            width:100% !important;
        }
    }

    .myrow_parent_row .column:hover {
        box-shadow: 0px 0px 8px -4px;
    }


    .product_bdr{
        padding: 10px 10px 20px 10px;
        font-size: 12px;
    }
    .product_bdr .more{
        padding: 8px 12px 8px;
    }
    .myrow_parent_row .column{
        margin-left: 15px;
    }
    .single_product{
        border: 2px solid #F6F6F6;
        text-align:center;
        margin-bottom: 40px;
    }
    .single_product a{
        text-align:center;
    }
    .product_more{
        margin-top:20px;
    }
    .single_product img{
        height:215px;
        width:100%;
    }
    .modal{
        height:100%;
        width:100%;
        background:#3c3c3c8f;
        position: fixed;
        top:0;
        left:0;
        z-index:9999;
        display:none;
        padding:30px;
    }
    .row.gray {
        margin-top: 0;
    }
    .sticky .sf-menu li a, sticky .sf-menu li a:visited {
        color: #000;
    }
    .transition .sf-menu li a, transition .sf-menu li a:visited {
        color: #303030;
    }
    .sticky .sf-menu li a{
        color: #000;
    }
    .contact-details li {
        color: #333;
    }
    .contact-details li a {
        color: #333;
    }
    .row.gray {
        margin-top: 0;
    }
    .single_service{
        width:100% !important;
    }
    .single_service h2, .single_service h3, .single_service p{
        width:100% !important;
    }
    .productBox {
        display: none;
    }
    .single_product:hover .productBox {
        display: block;
    }

    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        display: flex;
        justify-content: flex-end;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .flex {
        display: flex !important;
    }
.no-padding {
    padding: 0 !important;
}
.background_image {
    background-size: cover;
    background-repeat: no-repeat;
}

.text-center {
    text-align: center;
}

.scroll-bottom.scroll-bottom-home {
    width: 95.5%;
}
.scroll-bottom {
    width: 100%;
    color: green;
    font-size: 30px;
    position: absolute;
    text-align: center;
    bottom: 20px;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite;
    z-index: 200;
}

.scroll-bottom.scroll-bottom-home img {
    cursor: pointer;
}
.scroll-bottom img {
    width: 20px;
}

h2 {
    font-size: 30px;
    line-height: 45px;
}
.header clearfix li a{
color: #fff !important;
}
.sticky .sf-menu li a, sticky .sf-menu li a:visited {
    color: #000;
}
.transition .sf-menu li a, transition .sf-menu li a:visited {
    color: #303030;
}
.contact-details li {
    color: #fff;
}
.contact-details li a{
    color: #fff;
}

.col-centered {
    float: none;
    margin: 0 auto;
}

.carousel-control {
    width: 8%;
    width: 0px;
}
.carousel-control.left,
.carousel-control.right {
    margin-right: 40px;
    margin-left: 32px;
    background-image: none;
    opacity: 1;
}
.carousel-control > a > span {
    color: white;
	  font-size: 29px !important;
}

.carousel-col {
    position: relative;
    min-height: 1px;
    padding: 5px;
    float: left;
 }

 .active > div { display:none; }
 .active > div:first-child { display:block; }

/*xs*/
@media (max-width: 767px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*sm*/
@media (min-width: 768px) and (max-width: 991px) {
  .carousel-inner .active.left { left: -50%; }
  .carousel-inner .active.right { left: 50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		     { left: -50%; }
  .carousel-col                { width: 50%; }
	.active > div:first-child + div { display:block; }
}

/*md*/
@media (min-width: 992px) and (max-width: 1199px) {
  .carousel-inner .active.left { left: -33%; }
  .carousel-inner .active.right { left: 33%; }
	.carousel-inner .next        { left:  33%; }
	.carousel-inner .prev		     { left: -33%; }
  .carousel-col                { width: 33%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
}

/*lg*/
@media (min-width: 1200px) {
  .carousel-inner .active.left { left: -25%; }
  .carousel-inner .active.right{ left:  25%; }
	.carousel-inner .next        { left:  25%; }
	.carousel-inner .prev		     { left: -25%; }
  .carousel-col                { width: 25%; }
	.active > div:first-child + div { display:block; }
  .active > div:first-child + div + div { display:block; }
	.active > div:first-child + div + div + div { display:block; }
}

.block {
	width: 306px;
	height: 230px;
    padding: 40px;
    overflow: hidden;
	background:#fff;
}
.img-responsive img{
	overflow:hidden;
    overflow: hidden;
	height:100%;
	width:100%;
}
h2.box-header {
    margin-bottom: 30px;
}
#job_item .row {
width: 100% !important;
}
</style>


<div class="container">
    <h1 style="font-size: 36px; margin-top: 100px">Search Results...</h1>
    <div class="clearfix">
        <div class="row page-margin-top-section">
            <div class="row">

                <hr/>
            </div>
            <ul class="services-list gray clearfix">
                @if(!empty($services))
                    @foreach ($services as $commercial)
                        <li>
                            <a href="{{ route('single.service', $commercial->id) }}" >
                                <img src="{{ asset('') }}/images/service/{{ explode(',',$commercial->image)[0]  }}" alt="">
                            </a>
                            <h4 class="box-header"><a href="{{ route('single.service', $commercial->id) }}" title="{{ Helper::get_category_title($commercial->category) }}">{{ Helper::get_category_title($commercial->category) }}</a></h4>
                            <p>{{ \Illuminate\Support\Str::limit($commercial->short_description, 200) }}</p>
                        </li>
                    @endforeach

                @endif
            </ul>

        </div>
    </div>


</div>

<div class="theme-page padding-bottom-100">




    <div class="clearfix">
        <div class="row">



            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="flex flex-row">
                        <div class="mr-5">
                            <img width="500px" id="modalImage" src="" alt="">
                        </div>
                        <div class="flex flex-column justify-content-between">
                            <h1 id="modalTitle">

                            </h1>
                            <div id="modalData">

                            </div>
                            <a href="/booking" class="more">Book Now</a>
                        </div>

                    </div>

                </div>

            </div>


            <div class="column column-3-4 myrow_parent_row">
                <div class="row">
                    @if(!empty($products))
                        @foreach($products as $product)
                            <div class="column column-1-3 single_product">
                                <a href="{{ asset('uploads/images/'.$product->image) }}" class="prettyPhoto cm-preload" title="{{$product->title }}">
                                    <img src='{{ asset('uploads/images/'.$product->image) }}' alt='img'>
                                    <h4>{{ $product->title }}</h4>
                                </a>
                                <div class="product_bdr productBox">
                                    <div class="product_more">
                                        <a href="javascript:void(0)"
                                           data-product-id="{{ $product->id }}"
                                           data-product-title="{{ $product->title }}"
                                           data-product-short-description = "{{ $product->short_description }}"
                                           data-product-image = "{{ asset('uploads/images/'.$product->image) }}"
                                           class="more myBtn" title="Learn more">QUICK VIEW</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
{{--                    @elseif(!empty($SingleService))--}}
{{--                        @php--}}
{{--                            $images = explode(',', $SingleService->image);--}}
{{--                        @endphp--}}
{{--                        <div class="row single_service">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <img src="{{ asset('images/service') }}/{{ $images[0] }}" alt='img'>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <img src="{{ asset('images/service') }}/{{ $images[1] }}" alt='img'>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <h2 class="mt-3">{{ Helper::get_category_title($SingleService->category) }}</h2>--}}
{{--                                {!! $SingleService->description !!}--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    @else--}}
{{--                        <h1 style="padding: 20px; background: #f3d8d8;color: #bb4646; font-family: inherit;">No service on this category.</h1>--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


<section id="mycarousel_client" style="background-image:url('{{ asset('') }}/images/company_logo.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="box-header">OUR CLIENT</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-centered">

                <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
                    <div class="carousel-inner">
                        @if(!empty($clients))
                            @foreach($clients as $client)
                                <div class="item @if($loop->index == 0) active @endif">
                                    <div class="carousel-col">
                                        <div class="block img-responsive">
                                            <img src="{{ asset('') }}/images/brand/{{ $client->image }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Controls -->
                    <div class="left carousel-control">
                        <a href="#carousel" role="button" data-slide="prev">
                            <i class="fa fa-chevron-left glyphicon-chevron-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <div class="right carousel-control">
                        <a href="#carousel" role="button" data-slide="next">
                            <i class="fa fa-chevron-right glyphicon-chevron-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>






<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script>
	$('.carousel[data-type="multi"] .item').each(function() {
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		for (var i = 0; i < 2; i++) {
			next = next.next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}

			next.children(':first-child').clone().appendTo($(this));
		}
	});
	</script>
@endsection
