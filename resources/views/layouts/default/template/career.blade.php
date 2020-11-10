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
#job_item .row {
width: 100% !important;
}
.sf-menu li a, .sf-menu li a:visited {
    color: #fff !important;
}
</style>

<section class="no-padding">
    <div class="background_image" style="background-image:url('images/career.jpg')">
        <div class="overlay"></div>
       <div class="full-screen">

		<div class="banner_center">
			<h2><span class="first_big">J</span>OIN <span class="first_big">DCS</span> <span class="first_big">F</span>AMILY</h2>
			<p style="color:#fff">
			DCS works toward the digitalization of the future. As entrepreneurs, we offer services with innovation and deliver end-to-end solutions for our clients. To transform the businesses in ways the industry has never seen before, DCS provides innovation and digitalization with Hi-technology. We believe the reason behind every success is our team's strength and proficiency. We are committed to the establishment of a sophisticated, inclusive atmosphere, where everyone is valued and appreciated, no matter who they are. We know that knowledge is continual, hence we are devoted to take part in advancing the future of our our purpose and values. You can learn more about
				<a href="">our purpose and values.</a>
			</p>
		</div>

		 <div class="scroll-bottom scroll-bottom-home">
		 </div>

       </div>
    </div>
</section>

<section id="job_item">
	<div class="container">

    @foreach($circular as $key => $c)
      <div class="job_item">
        <div class="row">
                <div class="col-md-2">
                    <p class="text-center"><span class="serial_text">{{$key+1}}</span></p>
                </div>
                <div class="col-md-8">
                    <p class="date_item">Post Date: {{ date('d M, Y', strtotime($c->post_date)) }}</p>
                     <p class="post_title text-uppercase">{{strtoupper($c->title)}}</p>
                    <!-- <p class="date_item red-text">Deadline: {{ date('d M, Y', strtotime($c->post_end_date)) }}</p> -->
                </div>
                <div class="col-md-2">
                    <a class="apply_button button" href="/career/{{$c->id}}"><span>apply now</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                </div>
            </div>
       </div>
      @endforeach

	</div>
</section>


@include('layouts.default.template.sections.client_section', $clients);








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
