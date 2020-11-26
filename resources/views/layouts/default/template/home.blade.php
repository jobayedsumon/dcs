
@extends('layouts.default.master')
@section('content')
</div>

<style>
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

.fourBox {
    background-color: #0072AE;
    text-align: center;
    padding: 20px 10px;
    text-align: left;
}

.fourBox p {
    color: #fff;
    font-size: 18px;
    font-weight: bold;
}

.youtube_video {
    text-align: center;
    margin-bottom: 50px;
}

.confacts-section {
    padding-bottom: 70px;
    padding-top: 70px;
    background-image: url({{ asset('images/archive.jpg') }});
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center center;
    position: relative;
}
.facts_border {
    width: 2px;
    height: 103px;
    background: #fff;
    position: absolute;
    top: -70px;
}

.facts_border_2 {
    height: 175px;
}

.facts_wrapper {
    padding: 30px 0 10px 30px;
    margin-right: 0;
}
.funfact_wapr h3 {
    margin-top: 9px;
    margin-bottom: 25px;
    letter-spacing: 5px;
    margin-left: 30px;
    font-size: 60px;
    color: #fff;
}
.funfact_wapr h5 {
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 13px;
    margin-left: 30px;
    font-size: 13px;
    color: #fff;
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

.videoSection {
    background: #f5f5f5 none repeat scroll 0 0;
    height: 500px;
    padding: 0;
    position: relative;
}

#videoWrap1 {
    height: 100%;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.myVideo {
    height: 100%;
    left: 0;
    object-fit: cover;
    position: absolute;
    top: 0;
    width: 100%;
}

.vidContent {
    bottom: 0;
    height: 100px;
    left: 0;
    margin: auto 0;
    position: absolute;
    text-align: center;
    top: 0;
    z-index: 2;
    right: 0;
}

.vidContent h2 {
    display: inline-block;
    font-size: 45px;
    color: #fff;
    font-family: montserratlight;
    letter-spacing: .9px;
    font-weight: 400;
}


.playBtn {
    background: #fff;
    border-radius: 50%;
    color: #333333;
    display: inline-flex;
    font-size: 30px;
    height: 32px;
    line-height: 1;
    margin: 10px;
    padding: 32px 32px;
    position: relative;
    text-decoration: none;
    transition: all 500ms ease 0s;
    width: 50px;
    z-index: 1;
}

#playVideos {
    padding: 0px 2px;
    position: relative;
    display: block;
}

#playVideos:after {
    position: inherit;
    content: '\f04b';
    font-family: FontAwesome;
    right: 8px;
    bottom: 12px;
}

.playBtn:after {
    border: 2px solid #333;
    border-radius: 50%;
    bottom: 0;
    content: "";
    height: 65px;
    left: 0;
    position: absolute;
    right: auto;
    top: 0;
    width: 65px;
    z-index: -1;
}

.overlay70v:after {
    background: rgba(0, 0, 0, .70);
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    content: '';
}

.slidArrow {
    padding: 5px;
    border: 1px solid black;
    border-radius: 50%;
}

#playVideos.active:after {
    content: '\f04c';
    font-family: FontAwesome;
    position: inherit;
    right: 14px;
    bottom: 14px;
}

#playVideos:focus {
    outline: none;
}

#playVideos {
    outline: none;
}

.learnMore {
    background-color: rgba(8, 94, 173, .8);
    color: #fff;
    border-color: #fff;
    border-radius: 20px;
}

.learnMore:hover {
    background-color: #fff;
    color: rgba(8, 94, 173, .8);
    border: 2px solid rgba(8, 94, 173, .8);
}

.firstRow {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    width: 100%;
    justify-content: space-evenly;
}

.secondRow {
    display: flex;
    width: 500px;
    justify-content: space-evenly;

}

.serviceLink {
    color: #000;
    font-size: 20px;
    font-weight: bold;
}

.serviceLink:hover {
    color: #0072AE !important;
}

.serviceDetails {
    text-align: justify;
}

@media only screen and (max-width: 600px)
{
    .firstRow img {
        width: 100px !important;
    }
    .firstRow:nth-child(2) {
        width: 150px !important;
    }
}



</style>

<section class="videoSection overlay70">
    <div id="videoWrap1">
        <video class="myVideo" id="sliderVideo" loop="true" muted autoplay>
            <source src="{{ asset('uploads/slider.mp4') }}" type="video/mp4">
        </video>
    </div>

</section>


{{--<div class="revolution-slider-container">--}}
{{--	<div class="revolution-slider" data-version="5.4.5">--}}
{{--		<ul>--}}
{{--			@if(!empty($slider))--}}
{{--			@foreach ($slider as $data)--}}
{{--				<li data-transition="fade" data-masterspeed="500" data-slotamount="1" data-delay="6000">--}}
{{--					<!-- MAIN IMAGE -->--}}
{{--					<img src="{{ asset('') }}/images/slider/{{ $data->image }}" alt="slidebg1" data-bgfit="cover">--}}
{{--					<!-- LAYERS -->--}}
{{--					<!-- LAYER 01 -->--}}
{{--					<div class="tp-caption"--}}
{{--						data-frames='[{"delay":500,"speed":1500,"from":"y:-40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'--}}
{{--						data-x="center"--}}
{{--						data-y="['211', '257', '160', '218']"--}}
{{--						>--}}
{{--						<h4>{{ $data->heading_up }}</h4>--}}
{{--					</div>--}}
{{--					<!-- LAYER 02 -->--}}
{{--					<div class="tp-caption"--}}
{{--						data-frames='[{"delay":900,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'--}}
{{--						data-x="center"--}}
{{--						data-y="['273', '313', '200', '260']"--}}
{{--						>--}}
{{--						<h2><a href="{{ route('calculator.page')}}" title="Estimate Total Costs">{{ $data->heading_middle }}</a></h2>--}}
{{--					</div>--}}
{{--					<!-- LAYER 03 -->--}}
{{--					<div class="tp-caption"--}}
{{--						data-frames='[{"delay":1100,"speed":2000,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'--}}
{{--						data-x="center"--}}
{{--						data-y="['345', '368', '236', '290']"--}}
{{--						>--}}
{{--						<h2 class="slider-subtitle"><strong>{{ $data->heading_down }}</strong></h2>--}}
{{--					</div>--}}
{{--					<!-- LAYER 04 -->--}}
{{--					<div class="tp-caption"--}}
{{--						data-frames='[{"delay":1500,"speed":1500,"from":"y:40;o:0;","ease":"easeInOutExpo"},{"delay":"wait","speed":500,"to":"o:0;","ease":"easeInOutExpo"}]'--}}
{{--						data-x="center"--}}
{{--						data-y="['476', '478', '304', '353']"--}}
{{--						>--}}
{{--						<div class="align-center">--}}
{{--							<!--<a class="more" href="{{ route('calculator.page')}}" title="Service calculator">Service calculator</a>-->--}}
{{--						</div>--}}
{{--					</div>--}}
{{--					<!-- / -->--}}
{{--				</li>--}}
{{--			@endforeach--}}
{{--			@endif--}}
{{--		</ul>--}}
{{--	</div>--}}
{{--</div>--}}


<div class="row page-margin-top-section" style="padding-bottom:50px;">
	<div class="col-md-3 about_dbl_img">
		<a href="{{ asset('') }}/images/samples/480x320/company1.jpg" class="prettyPhoto cm-preload" title="House Cleaning">
			<img src='{{ asset('') }}/images/samples/480x320/company1.jpg' alt='img'>
		</a>
		<a href="{{ asset('') }}/images/samples/480x320/company2.jpg" class="prettyPhoto cm-preload" title="Window Cleaning">
			<img src='{{ asset('') }}/images/samples/480x320/company2.jpg' alt='img'>
		</a>
	</div>
	<div class="col-md-3">
		<a href="{{ asset('') }}/images/samples/480x693/company3.jpg" class="prettyPhoto cm-preload" title="Apartment Cleaning">
			<img src='{{ asset('') }}/images/samples/480x693/company3.jpg' alt='img'>
		</a>
	</div>
	<div class="col-md-6">
		<h2 class="box-header">ABOUT US</h2>
		<!--<p class="description align-center">Providing Housekeeping & Maintenance <br> Services For More Than 07 Years!</p>-->
		<p class="align-center padding-0 margin-top-27 padding-left-right-35 text-justify">DCS Organization limited is a professional Facility Management Organization that has been serving in several local & Multi-national companies, Chain Hotels, Airlines offices, Garments, corporate offices etc. for the last six years. DCS Organization limited is supported 100% by Johnson Diversey cleaning Chemicals & treatment; we are pleased to avail the opportunity to enhance the beautifying of your area with the help of world-famous Johnson Diversey Chemical Treatment. We want to be your preferred cleaning & pest control partner to make sure that the service and quality you receive is second to one...</p>
		<div class="align-center page-margin-top padding-bottom-16">
			<a class="learnMore py-2 px-2" href="{{ route('about.page') }}" title="Learn more">Learn more</a>
		</div>
	</div>
</div>

<div class="theme-page">
    <div class="clearfix">
        <div class="row margin-top-50">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="box-header">OUR SERVICES</h2>
                </div>
            </div>
            <div class="row text-center">



                <div class="col-md-12 mt-3">
                    <a class="serviceLink" href="{{ route('single.service', $featuredServices[0]->id) }}">
                        {{ $featuredServices[0]->title }}
                    </a>
                    <a class="" href="{{ route('single.service', $featuredServices[0]->id) }}"> <p class="">{{ $featuredServices[0]->short_description }}</p></a>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="column column-1-4">
                        <ul class="features-list align-right margin-top-30">
                            <li>
                                <a class="serviceLink" href="{{ route('single.service', $featuredServices[2]->id) }}">
                                    {{ $featuredServices[2]->title }}
                                </a>
                                <a class="" href="{{ route('single.service', $featuredServices[2]->id) }}"> <p class="serviceDetails">{{ $featuredServices[2]->short_description }}</p></a>

                            </li>
                            <li>
                                <a class="serviceLink" href="{{ route('single.service', $featuredServices[4]->id) }}">
                                    {{ $featuredServices[4]->title }}
                                </a>
                                <a class="" href="{{ route('single.service', $featuredServices[4]->id) }}"> <p class="serviceDetails">{{ $featuredServices[4]->short_description }}</p></a>

                            </li>

                        </ul>
                    </div>
                    <div class="column column-1-2 align-center">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @forelse(\App\Models\Sildertwo::all() as $slider)
                                <div class="carousel-item {!! $loop->first ?  'active' : '' !!}">
                                    <img src="{{ asset($slider->image) }}" alt="Los Angeles">
                                </div>
                                @empty
                                @endforelse

                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="column column-1-4">
                        <ul class="features-list margin-top-30">
                            <li>
                                <a class="serviceLink" href="{{ route('single.service', $featuredServices[1]->id) }}">
                                    {{ $featuredServices[1]->title }}
                                </a>
                                <a class="" href="{{ route('single.service', $featuredServices[1]->id) }}"> <p class="serviceDetails">{{ $featuredServices[1]->short_description }}</p></a>

                            </li>
                            <li>
                                <a class="serviceLink" href="{{ route('single.service', $featuredServices[5]->id) }}">
                                    {{ $featuredServices[5]->title }}
                                </a>
                                <a class="" href="{{ route('single.service', $featuredServices[5]->id) }}"> <p class="serviceDetails">{{ $featuredServices[5]->short_description }}</p></a>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="align-center padding-bottom-16 mt-3">
                    <a class="serviceLink" href="{{ route('single.service', $featuredServices[3]->id) }}">
                        {{ $featuredServices[3]->title }}
                    </a>
                    <a class="" href="{{ route('single.service', $featuredServices[3]->id) }}"> <p class="serviceDetails">{{ $featuredServices[3]->short_description }}</p></a>

                </div>

            </div>
        </div>
    </div>
</div>


<section id="mycarousel_client">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="box-header">MEMBERSHIP AND ACCREDITATION</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12 col-centered p-0">

			<div >

                @if(!empty($membership))

                        <div class="row">
                                <div class="mb-5 firstRow">
                                    <img width="100px" src="{{ asset('') }}uploads/images/membership/{{ $membership[0]->image }}" class="img-responsive">

                                    <img width="200px" src="{{ asset('') }}uploads/images/membership/{{ $membership[2]->image }}" class="img-responsive">

                                   <img width="100px" src="{{ asset('') }}uploads/images/membership/{{ $membership[1]->image }}" class="img-responsive">

                                </div>

                        </div>

                @endif
			</div>

		</div>
	</div>
</div>
</section>




@include('layouts.default.template.sections.client_section');

@include('layouts.default.template.sections.testimonial_section');

<section id="mygallary">
	<div class="container">
        <div class="row gl_controller">
			<div class="col-md-12 text-center">
				<h2 class="box-header">GALLERY</h2>
			</div>
			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div align="center">
					<span class="filter-button" data-filter="all">All</span>

        			@if(!empty($gallarys))
        			    <?php
        			    $cat = [];
        			    foreach($gallarys as $gallary){
            			    $cat[$gallary->category]= $gallary->category;
        			    } ?>

                     @foreach($cat as $c)
                        <span class="filter-button" data-filter="{{ 'catbtn'.$c }}">{{ Helper::get_category_title($c) }}</span>
                    @endforeach

        			@endif
				</div>
			</div>
		</div>
		<div class="row">
			@if(!empty($gallarys))
    			@foreach($gallarys as $gallary)
                    @if($loop->index <= 14)
                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter {{ 'catbtn'.$gallary->category }}">
    					<a href="{{ asset('') }}images/gallery/{{ $gallary->image }}" class="prettyPhoto cm-preload" onmouseover="this.title='{{ Helper::get_category_title($gallary->category) }}';" onclick="this.title='<h4>{{ Helper::get_category_title($gallary->category) }}</h4> {{ $gallary->description }} ';">
    						<img src='{{ asset('') }}images/gallery/{{ $gallary->image }}' alt='img'>
    					</a>
                    </div>
                    @endif
    			@endforeach
			@endif
        </div>
    </div>
</section>

{{--<section class="bg-dark text-white py-5 min-vh-100">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center text-center">--}}
{{--            <div class="col-12">--}}
{{--                <h1 class="pb-3">Number counter animation in pure JavaScript</h1>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <span id="count1" class="display-4"></span>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <span id="count2" class="display-4"></span>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <span id="count3" class="display-4"></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<div class="row full-width page-margin-top-section padding-bottom-100 counters-group parallax parallax-2 overlay" style="background-image: url('{{ asset("images/bleach-cleaner.jpg") }}'); background-position: 50% -162.5px;">
    <div class="row">
        <div class="column column-1-4">
            <div class="counter-box">
                <div class="ornament-container" style="height: 100%;">
                    <div class="ornament animated-element duration-5000 animation-ornamentHeight ornamentHeight" data-animation-start="0" style="animation-duration: 5000ms; animation-delay: 5000ms; transition-delay: 5000ms;"></div>
                </div>
                 <div class="facts_wrapper">
                        <h3 class="stat-count count" id="count1">500</h3>
                    </div>
                </span>
                <p>TOTAL CLIENTS</p>
            </div>
        </div>
        <div class="column column-1-4">
            <div class="counter-box">
                <div class="ornament-container" style="height: 70%;">
                    <div class="ornament animated-element duration-5000 animation-ornamentHeight ornamentHeight" data-animation-start="0" style="animation-duration: 5000ms; animation-delay: 5000ms; transition-delay: 5000ms;"></div>
                </div>
                <div class="facts_wrapper">
                    <h3 class="stat-count count" id="count2">400</h3>
                </div>
                 <p>HAPPY CLIENTS</p>
            </div>
        </div>
        <div class="column column-1-4">
            <div class="counter-box">
                <div class="ornament-container" style="height: 100%;">
                    <div class="ornament animated-element duration-5000 animation-ornamentHeight ornamentHeight" data-animation-start="0" style="animation-duration: 5000ms; animation-delay: 5000ms; transition-delay: 5000ms;"></div>
                </div>
                <div class="facts_wrapper">
                    <h3 class="stat-count count" id="count3">500</h3>
                </div>
                <p>COMPLETED PROJECTS</p>
            </div>
        </div>
        <div class="column column-1-4">
            <div class="counter-box">
                <div class="ornament-container" style="height: 15%;">
                    <div class="ornament animated-element duration-5000 animation-ornamentHeight ornamentHeight" data-animation-start="0" style="animation-duration: 5000ms; animation-delay: 5000ms; transition-delay: 5000ms;"></div>
                </div>
                <div class="facts_wrapper">
                    <h3 class="stat-count count" id="count4">100</h3>
                </div>
                <p>AVERAGE CUSTOMERS</p>
            </div>
        </div>
    </div>
</div>

{{--<section class="confacts-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="funfact_wapr" style="width: 100%">--}}

{{--                <div class="col-sm-3 col-xs-12">--}}
{{--                    <div class="facts_border"></div>--}}
{{--                    <div class="facts_wrapper">--}}
{{--                        <h3 class="stat-count count" id="count1">500</h3>--}}
{{--                        <h5>TOTAL CLIENTS</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-sm-3 col-xs-12">--}}
{{--                    <div class="facts_border facts_border_2"></div>--}}
{{--                    <div class="facts_wrapper">--}}
{{--                        <h3 class="stat-count count" id="count2">400</h3>--}}
{{--                        <h5>HAPPY CLIENTS</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-sm-3 col-xs-12">--}}
{{--                    <div class="facts_border"></div>--}}
{{--                    <div class="facts_wrapper">--}}
{{--                        <h3 class="stat-count count" id="count3">500</h3>--}}
{{--                        <h5>COMPLETED PROJECTS</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-sm-3 col-xs-12">--}}
{{--                    <div class="facts_border facts_border_2"></div>--}}
{{--                    <div class="facts_wrapper">--}}
{{--                        <h3 class="stat-count count" id="count4">100</h3>--}}
{{--                        <h5>AVERAGE CUSTOMERS</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--</section>--}}
<section id="faq_section">
<div class="container">
	<div class="row">
		<div class="col-lg-6">
			<div class="sectionTitle marginBbottom40">
				<h2>FAQ</h2>
				<div class="titleBar left"></div>
				<!--
				<p>
					The helpless the powerless in a world of criminals who operate above <br>the law texas
					tea here is the story of a man named Brady
				</p>
				-->
			</div>
			@if(!empty($faqs))
			@foreach($faqs as $faq)
			<div class="single_accordian">
				<div id="question" class="question">
					<i class="fa fa-plus" aria-hidden="true"></i>
					<span>{{ $faq->question }}</span>
				</div>
				<div class="anwser">
				    {!! $faq->answer !!}
				</div>
			</div>
			@endforeach
			@endif


		</div>
		<div class="col-md-6 col-lg-6">
			<div class="sectionTitle">
				<h2>WHY DO YOU HIRE US !</h2>
				<div class="titleBar left"></div>
				<!--
				<p>
					The helpless the powerless in a of crimals who operate above the law texas
					tea here is the story of a man named Brady
				</p>
				-->
			</div>
			<div class="four_img">
				<div class="row hori_border">
					<div class="col-md-6 vt_border fourBox">
						<p>Professional Staff</p>
					</div>
					<div class="col-md-6 fourBox">
						<p>Competitive Price</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 vt_border fourBox">
						<p>Safety and Experience</p>
					</div>
					<div class="col-md-6 fourBox">
						<p>Eco-friendly Chemicals</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<section class="videoSection overlay70">
    <div id="videoWrap1">
        <video id="myVideo1" muted="" class="myVideo">
            <source src="{{ asset('uploads/dcs.mp4') }}" type="video/mp4">
        </video>
    </div>
    <div class="vidContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <div class="playBtn">
                        <a href="javascript:void('0')" id="playVideos"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>



    // $('#membershipCarousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     responsive:{
    //         0:{
    //             items:3
    //         },
    //         600:{
    //             items:3
    //         },
    //         1000:{
    //             items:3
    //         }
    //     }
    // });



    document.addEventListener("DOMContentLoaded", () => {
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) {
                        clearInterval(timer);
                    }
                }, step);
        }
        counter("count1", 0, 500, 5000);
        counter("count2", 0, 400, 5000);
        counter("count3", 0, 500, 5000);
        counter("count4", 0, 100, 5000);
    });

    //=======================================================
    // Video Section
    //=======================================================
    var vid1 = document.getElementById("myVideo1");
    function playPause1() {
        if (vid1.paused) {
            vid1.play();
        } else {
            vid1.pause();
        }
    }
    if ($("#videoWrap1").length > 0)
    {
        $('#playVideos').on('click', function (e) {
            e.preventDefault();
            playPause1();
            if ($(this).hasClass('active'))
            {
                $(this).removeClass('active');
                vid1.pause();
            } else
            {
                $(this).addClass('active');
                vid1.play();
            }
        });
    }
    ;

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
<script>
jQuery(document).on('click','.question',function(){
	jQuery('.anwser').hide();
	jQuery('#question i').css({'background':'#0072AE', 'color':'#ff'});
	jQuery('#question').removeClass("active");
	jQuery('#question').addClass("question");
	jQuery(this).parent('.single_accordian').find('.fa').removeClass("fa-minus").addClass("fa-plus");

	jQuery(this).parent('.single_accordian').find('.anwser').slideDown();
	jQuery(this).parent('.single_accordian').find('#question i').css({'background':'#333', 'color':'#ff'});
	jQuery(this).parent('.single_accordian').find('#question').addClass("active");
	jQuery(this).parent('.single_accordian').find('#question').removeClass("question");
	jQuery(this).parent('.single_accordian').find('.fa').removeClass("fa-plus");
	jQuery(this).parent('.single_accordian').find('.fa').addClass("fa-minus");

});
jQuery(document).on('click','.active',function(){
	jQuery(this).parent('.single_accordian').find('.anwser').slideUp();
	jQuery(this).parent('.single_accordian').find('#question i').css({'background':'#0072AE', 'color':'#ff'});
	jQuery(this).parent('.single_accordian').find('#question').removeClass("active");
	jQuery(this).parent('.single_accordian').find('#question').addClass("question");
	jQuery(this).parent('.single_accordian').find('.fa').removeClass("fa-minus");
	jQuery(this).parent('.single_accordian').find('.fa').addClass("fa-plus");
});
</script>






<script type="text/javascript">
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});
</script>

@endsection
