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
    color: #fff;
}
.transition .sf-menu li a, transition .sf-menu li a:visited {
    color: #303030;
}
.sticky .sf-menu li a{
    color: #333;
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
</style>
</div>
<div class="theme-page padding-bottom-100">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row">
			<div class="page-header-left">
				<h1 style="text-transform: uppercase;">{{ Helper::get_category_title($SingleService->category) }}</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="{{ url('/') }}">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							<a title="Our Services" href="{{ route('service.page') }}">
								Our Services
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							{{ Helper::get_category_title($SingleService->category) }}
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="clearfix">
		<div class="row">
			<div class="column column-1-4">
				<ul class="vertical-menu">
				    @if(!empty($all_category))
				    @foreach($all_category as $category)
					<li>
						<a style="color: #000" href="<?php echo route('single.service', $category->id) ?>" title="{{ $category->title }}">
							{{ $category->title }}
						</a>
					</li>
                    @endforeach
                    @endif
				</ul>
{{--				<ul class="services-list services-icons gray page-margin-top clearfix">--}}
{{--					<li>--}}
{{--						<a href="?page=service_calculator" title="Cost Calculator">--}}
{{--							<span class="service-icon features-calculator"></span>--}}
{{--						</a>--}}
{{--						<h4><a href="?page=service_calculator" title="Cost Calculator">COST CALCULATOR</a></h4>--}}
{{--						<p class="description">Estimate cleaning cost.</p>--}}
{{--						<div class="align-center margin-top-40 padding-bottom-16">--}}
{{--							<a class="more" href="{{ route('calculator.page') }}" title="Learn more">Learn more</a>--}}
{{--						</div>--}}
{{--					</li>--}}
{{--				</ul>--}}
			</div>



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
				    @if(!empty($SingleProduct))
					@foreach($SingleProduct as $product)
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
					@elseif(!empty($SingleService))
					@php
					    $images = explode(',', $SingleService->image);
					@endphp
					<div class="row single_service">
    				     <div class="col-md-6">
    				         <img src="{{ asset('images/service') }}/{{ $images[0] }}" alt='img'>
    				     </div>
    				     <div class="col-md-6">
    				         <img src="{{ asset('images/service') }}/{{ $images[1] }}" alt='img'>
    				     </div>
    				     <div class="col-md-12">
    				         <h2 class="mt-3">{{ Helper::get_category_title($SingleService->category) }}</h2>
    				         {!! $SingleService->description !!}
    				      </div>

				     </div>
                    @else
                     <h1 style="padding: 20px; background: #f3d8d8;color: #bb4646; font-family: inherit;">No service on this category.</h1>
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>
@include('layouts.default.template.sections.client_section');
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];



    $('.myBtn').click(function (e) {
        // modal.style.display = "block";
        var product_id = $(this).data('product-id');
        var product_title = $(this).data('product-title');
        var image = $(this).data('product-image');
        var short_description = $(this).data('product-short-description');
        $('#modalImage').attr('src', image);
        $('#modalData').html(short_description);
        $('#modalTitle').html(product_title);
        modal.style.display = "block";
    })

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }




</script>
@endsection

