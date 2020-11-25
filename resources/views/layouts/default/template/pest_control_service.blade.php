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

font-size: 12px;
}
.product_bdr .more{

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
    height:150px;
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
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.5s linear;
}
.single_product:hover .productBox {
    visibility: visible;
    opacity: 1;
}

/*.modal {*/
/*    display: none; !* Hidden by default *!*/
/*    position: fixed; !* Stay in place *!*/
/*    z-index: 1; !* Sit on top *!*/
/*    left: 0;*/
/*    top: 0;*/
/*    width: 100%; !* Full width *!*/
/*    height: 100%; !* Full height *!*/
/*    overflow: auto; !* Enable scroll if needed *!*/
/*    background-color: rgb(0,0,0); !* Fallback color *!*/
/*    background-color: rgba(0,0,0,0.4); !* Black w/ opacity *!*/
/*}*/

/* Modal Content/Box */
/*.modal-content {*/
/*    background-color: #fefefe;*/
/*    margin: 15% auto; !* 15% from the top and centered *!*/
/*    padding: 20px;*/
/*    border: 1px solid #888;*/
/*    width: 80%; !* Could be more or less, depending on screen size *!*/
/*}*/

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
.myBtn, .quickButton {
    background-color: rgba(8, 94, 173, .8);
    text-decoration: none;
    color: #fff;
    text-align: center;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
}

.myBtn:hover, .quickButton:hover {
    color: rgba(8, 94, 173, 1);
    background-color: #fff;
    border: 1px solid rgba(8, 94, 173, 1);
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    opacity: 1;
}
#modalVariations {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 500px;
}
#modalVariations span {
    font-weight: bold;
}
.modal-backdrop.show {
    opacity: 0;
}
.bold {
    font-weight: bold;
}
.modal-body {
    position: relative;
    overflow-y: auto;
    max-height: 400px;
    padding: 15px;
}
.modal-dialog{
    position: relative;
    display: table; /* This is important */
    overflow-y: auto;
    overflow-x: auto;
    width: auto;
    min-width: 300px;
}
.modal-dialog {
    width: 400px;
}


.bread-crumb li a {
    color: #fff !important;
}

</style>
</div>
@php
    $images = explode(',', $SingleService->image);
@endphp
<div class="theme-page padding-bottom-100">
	<div class="row gray full-width page-header vertical-align-table"  style="background: url('{{ asset('images/service') }}/{{ $images[0] }}') no-repeat; background-size: cover; height: 500px">
		<div class="row">
			<div class="page-header-left">
				<h1 style="text-transform: uppercase; color: #fff">{{ Helper::get_category_title($SingleService->category) }}</h1>
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
                            <a href="">{{ Helper::get_category_title($SingleService->category) }}</a>
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










            <div class="column column-3-4 myrow_parent_row">
                <div class="border border-dark p-2 mb-5">
                    <h1 class="text-center">
                        GENERAL PEST CONTROL FOR RESIDENTIAL - (GUARANTEE: 03 MONTHS )</h1>
                </div>
				<div class="row">


				    @if(!empty($SingleProduct))
					@foreach($SingleProduct->where('title', 'LIKE', 'Flat up to%')->get() as $product)

                    <div class="col-3 single_product pb-2">
			            <a href="{{ asset('uploads/images/'.$product->image) }}" class="prettyPhoto cm-preload" title="{{$product->title }}">
							<img src='{{ asset('uploads/images/'.$product->image) }}' alt='img'>
                            <div class="product_bdr productBox">
                                <div class="product_more">
                                    <a data-target="#myModal"
                                       data-toggle="modal"
                                       class="quickButton p-2"
                                       title="QUICK VIEW"
                                       data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                    >QUICK VIEW</a>
                                </div>
                            </div>
                            <p style="font-size: 13px; font-weight: bold">GENERAL PEST CONTROL FOR RESIDENTIAL-(GUARANTEE 03 MONTHS )</p>
                            <h4 style="font-size: 16px">{{ $product->title }}</h4>
                            {!! $product->short_description !!}
						</a>

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

                <div class="border border-dark p-2 mb-5">
                    <h1 class="text-center">
                        SPECIAL PEST CONTROL FOR RESIDENTIAL - (GUARANTY: 01 YEAR)</h1>
                </div>
                <div class="row mt-5">


                    @php

                        $SingleProduct = App\Models\Product::where('catergory_id', $id);


                    @endphp

                    @if(!empty($SingleProduct))

                        @foreach($SingleProduct->where('title', 'NOT LIKE', 'Flat up to%')->get() as $product)

                            <div class="col-3 single_product">
                                <a href="{{ asset('uploads/images/'.$product->image) }}" class="prettyPhoto cm-preload" title="{{$product->title }}">
                                    <img src='{{ asset('uploads/images/'.$product->image) }}' alt='img'>
                                    <div class="product_bdr productBox">
                                        <div class="product_more">
                                            <a data-toggle="modal" data-target="#myModal"
                                               class="quickButton p-2"
                                               title="QUICK VIEW"
                                               data-url="{{ route('dynamicModal',['id'=>$product->id])}}"
                                            >QUICK VIEW</a>
                                        </div>
                                    </div>
                                    <p style="font-size: 13px; font-weight: bold">SPECIAL PEST CONTROL FOR RESIDENTIAL-(GUARANTEE: 01 YEAR )</p>
                                    <h4 style="font-size: 16px">{{ $product->title }}</h4>
                                    {!! $product->short_description !!}
                                </a>

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
                <div class="border border-dark p-2 mb-5">
                    <h1 class="text-center">
                        COMMERCIAL PEST CONTROL</h1>

                </div>
                <div class="row mt-5">


                    <br>





                </div>
                <div>
                    <h1> For more information, you can contact us at <a class="myBtn p-2" href="/booking">Book Now</a></h1>
                </div>
			</div>
		</div>
	</div>
</div>
{{--<!-- The Modal -->--}}
{{--<div id="myModal" class="modal">--}}

{{--                <!-- content will be load here -->--}}
{{--                <div id="dynamic-content">--}}

{{--                </div>--}}

{{--</div>--}}

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('cart') }}" method="POST">
                @csrf
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div id="dynamic-content">

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn myBtn">Add to Cart</button>
{{--                <button id="addToCartModal" type="button" class="btn myBtn">Add to Cart</button>--}}
            </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.default.template.sections.client_section');

<script>


    $('.quickButton').click(function (e) {

        var url = $(this).data('url');

        $('#dynamic-content').html(''); // leave it blank before ajax call
        // $('#modal-loader').show();      // load ajax loader

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html'
        })
            .done(function (data) {
                $('#dynamic-content').html('');
                $('#dynamic-content').html(data); // load response
                $('#modal-loader').hide();        // hide ajax loader
            })
            .fail(function () {
                $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"/> Something went wrong, Please try again...');
                $('#modal-loader').hide();
            });
    });



</script>
@endsection

