@extends('layouts.default.master')
@section('content')

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

    .block {
        width: 250px;
        height: 160px;
        padding: 20px;
        overflow: hidden;
        background:#fff;
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
.flex {
    display: flex !important;
}
</style>
<div id="about_page" class="theme-page">
	<div class="row gray full-width page-header vertical-align-table" style="background: url('{{ asset("images/about-us.jpg") }}') no-repeat; background-size: cover; height: 360px">
		<div class="row">
			<div class="page-header-left">
				<h1>ABOUT US</h1>
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
							About Us
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">
		<div class="row page-margin-top-section">
			<div class="column column-1-2">
				<div class="row">
					<a href="{{ asset('') }}/images/samples/640x480/placeholder.jpg" class="prettyPhoto cm-preload" title="House Cleaning">
						<img src='{{ asset('') }}/images/samples/640x480/placeholder.jpg' alt='img'>
					</a>
				</div>
				<div class="row margin-top-30">
					<div class="column column-1-2">
						<a href="{{ asset('') }}/images/samples/480x320/about2.jpg" class="prettyPhoto cm-preload" title="Move In Out Services">
							<img src='{{ asset('') }}/images/samples/370x246/about2.jpg' alt='img'>
						</a>
					</div>
					<div class="column column-1-2">
						<a href="{{ asset('') }}/images/samples/480x320/about3.jpg" class="prettyPhoto cm-preload" title="After Renovation Cleaning">
							<img src='{{ asset('') }}/images/samples/370x246/about3.jpg' alt='img'>
						</a>
					</div>
				</div>
			</div>
			<div class="column column-1-2">
				<div class="row padding-left-right-30">
					<h4 class="box-header align-left">What we are saying.</h4>
					<p class="description">
                        DCS Organization limited is a professional Facility Management Organization that has been serving in several local & Multi-national companies, Chain Hotels, Airlines offices, Garments, corporate offices etc. for the last six years. DCS Organization limited is supported 100% by Johnson Diversey cleaning Chemicals & treatment; we are pleased to avail the opportunity to enhance the beautifying of your area with the help of world-famous Johnson Diversey Chemical Treatment. We want to be your preferred cleaning & pest control partner to make sure that the service and quality you receive is second to one.
					</p>

					<h4 class="margin-top-40 box-header align-left">OUR PHILOSOPHY</h4>

					<ul class="list margin-top-20">
						<p>
                            We provide our employees with training on cleaning & housekeeping, fire safety, emergency response basic communication etiquette, proper equipment and supplies they need to perform their duties in the most proficient manner. This also means treating those employees with respect and appreciation. By creating a positive work environment, our employees are naturally more inclined to perform at peak levels.
						</p>
					</ul>
				</div>
			</div>
		</div>
		<div class="row full-width page-margin-top-section page-padding-top-section padding-bottom-100 parallax parallax-3 overlay">
			<div class="row" style="display: flex; justify-content: space-evenly">
				<div class="vmslpadding">


				<!--<h4>Providing Housekeeping & Maintenance Services For More Than 07 Years!</h4>-->
				<!--<h5>The Cleaning Authority is widely recognized for our commitment to serving our customers while staying friendly to the environment. We have a history of excellence and dedication to our clients through providing professional and high-quality house cleaning & Pest control services across Bangladesh.</h5>-->

				<h1 class="mb-5">YOUR FACILITIES...</h1>

                    <div class="flex">
                        @forelse(\App\Helpers\Helper::get_category(0) as $primary)
                            <div class="mr-5">
                            <h3 class="mb-5">{{ $primary->title }}</h3>
                                @forelse(Helper::get_category($primary->id) as $sub_category)
                                    <p style="font-size: 16px"><a style="color: #fff" href="{{ route('single.service', $sub_category->id) }}"><i class="fa fa-dot-circle-o"></i> {{ $sub_category->title }}</a></p>
                                @empty
                                @endforelse
                            </div>

                        @empty
                        @endforelse
                    </div>

				<!--<h5>We are committed to high standards of service, and we enforce stringent quality assurance standards. We are insured and bonded, and we use environmentally responsible and sustainable cleaning products.</h5>-->

				</div>
			</div>
		</div>
		<div class="row page-margin-top-section padding-bottom-66">
			<div class="column column-3-3">
				<h3 style="text-align: center; color: black">MISSION & VISION</h3>
				<p class="description">
                    Fresh, clean surroundings and a healthy working environment are not only prerequisites for a Functional environment, but also the basis for well-being and employee productivity. For more than 7 years DCS Organization limited has set new standards within cleaning services throughout the country by offering efficient and flexible cleaning solutions. All of our solutions are based on each individual customer’s requirements. We are constantly developing new methods, tools and materials, which help improve cleaning as well as working conditions of our employees while minimizing any negative effects on the environment.
				</p>
			</div>
		</div>
        @include('layouts.default.template.sections.client_section');

        @include('layouts.default.template.sections.testimonial_section');
{{--		<div class="row gray full-width padding-top-89 padding-bottom-100">--}}
{{--			<div class="row">--}}
{{--				<div class="column column-1-2">--}}
{{--					<h3 style="color: black">OUR CLIENTS</h3>--}}
{{--					<div class="our-clients-list-container margin-top-40 type-list">--}}
{{--						<ul class="our-clients-list type-list">--}}

{{--							@if(!empty($ourbrand))--}}
{{--							@foreach ($ourbrand as $data)--}}
{{--							<li class="vertical-align">--}}
{{--								<div class="our-clients-item-container">--}}
{{--									<div class="vertical-align-cell">--}}
{{--										<a target="_blank" href="{{ $data->link }}">--}}
{{--											<img src="{{ asset('') }}/images/brand/{{ $data->image }}" alt="">--}}
{{--										</a>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--							</li>--}}
{{--							@endforeach--}}
{{--							@endif--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--				<div class="column column-1-2">--}}
{{--					<h3 style="color: black">WHAT OUR CUSTOMERS ARE SAYING !</h3>--}}
{{--					<div class="row testimonials-container type-small margin-top-40">--}}
{{--						<div class="cm-carousel-pagination"></div>--}}
{{--						<ul class="testimonials-list testimonials-carousel autoplay-0 pause_on_hover-1">--}}
{{--							@if(!empty($testimonial))--}}
{{--							@foreach ($testimonial as $data)--}}
{{--							<li>--}}
{{--								<p class="template-quote">{{ $data->dialogue }}</p>--}}
{{--								<div class="author-details-box">--}}
{{--									<div class="author">{{ $data->name }}, {{ $data->location }}</div>--}}
{{--									<!--<div class="author-details">CLEANING TECHNICAN</div>-->--}}
{{--								</div>--}}
{{--							</li>--}}
{{--							@endforeach--}}
{{--							@endif--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
	</div>
</div>

@endsection
