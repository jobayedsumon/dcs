@extends('layouts.default.master')
@section('content')
<style>
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
.banner_center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
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
.banner_center h2 {
    color: #fff;
    font-weight: bold;
    letter-spacing: 10px;
    margin-bottom: 15px;
	    text-align: center;
}
h2 {
    font-size: 30px;
    line-height: 45px;
}
.header clearfix li a{
color: #fff !important;
}
.sticky .sf-menu li a, sticky .sf-menu li a:visited {
    color: #fff;
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
#mycarousel_member .row{
    width:100%;
}
#mycarousel_member h2{
    font-size:20px;
    margin-top: 20px;
}
#mycarousel_client .row{
    width:100%;
}
</style>



<section class="no-padding">
    <div class="background_image" style="background-image:url('images/VMSL-MEMBERSHIP-min.jpeg')">
        <div class="overlay"></div>
       <div class="full-screen">
        
		<div class="banner_center">
			<h2><span class="first_big">M</span>embership <span class="first_big">A</span>nd <span class="first_big">A</span>ccreditation</h2>
		</div>
		
		 <div class="scroll-bottom scroll-bottom-home">
			
		 </div>
          
       </div>
    </div>
</section>


<section id="mycarousel_member">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="box-header">MEMBERSHIP AND ACCREDITATION</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12 col-centered">

			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="1800">
				<div class="carousel-inner">
			
					@if(!empty($membership))
					@foreach($membership as $data)
					<div class="item @if($loop->index == 0) active @endif">
						<div class="carousel-col">
							<div class="membershi_logo">
								<a href="{{ $data->add_info }}"><img src="{{ asset('') }}uploads/images/membership/{{ $data->image }}"></a>
							</div>
						</div>
					</div>
					@endforeach
					@endif
					
				</div>
			</div>

		</div>
	</div>
</div>
</section>

<section id="mycarousel_client" style="background-image:url('{{ asset('') }}/images/company_logo.jpg');">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="box-header">OUR CLIENT</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12 col-centered">

			<div id="carousel_client" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2000">
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
				<div class="left carousel-control">
					<a href="#carousel_client" role="button" data-slide="prev">
						<i class="fa fa-chevron-left glyphicon-chevron-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="right carousel-control">
					<a href="#carousel_client" role="button" data-slide="next">
						<i class="fa fa-chevron-right glyphicon-chevron-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
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