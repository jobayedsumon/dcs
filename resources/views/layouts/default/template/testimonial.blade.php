@extends('layouts.default.master')
@section('content')
<div class="theme-page">
	<div class="row gray full-width page-header vertical-align-table">
		<div class="row">
			<div class="page-header-left">
				<h1>CLIENT'S OPINIONS</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="?page=home">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							Testimonials
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix">

	@include('layouts.default.template.sections.testimonial_section');

		<div class="row page-margin-top-section">
			@if(!empty($testimonial))
			@foreach ($testimonial as $data)
			<div class="column column-1-3">
				<div class="row testimonials-container type-small">
					<ul class="testimonials-list gray">
						<li>
							<p class="template-quote">{{ $data->dialogue }}</p>
							<div class="author-details-box">
								<div class="author">{{ $data->name }}, {{ $data->location }}</div>
								<!--<div class="author-details">CLEANING TECHNICAN</div>-->
							</div>
						</li>
				
					</ul>
				</div>
			</div>
			@endforeach 
			@endif


{{-- 			<div class="column column-1-3">
				<div class="row testimonials-container type-small">
					<ul class="testimonials-list gray">
						<li>
							<p class="template-quote">We would like to thank Cleanmate company for an outstanding effort on this
							recently completed project located in the Moscow. The project involved a very
							aggressive.</p>
							<div class="author-details-box">
								<div class="author">Stacey, North Lynnwood</div>
								<!--<div class="author-details">CLEANING TECHNICAN</div>-->
							</div>
						</li>
						<li>
							<p class="template-quote">We would like to thank Cleanmate company for an outstanding effort on this
							recently completed project located in the Moscow. The project involved a very
							aggressive schedule and it was completed on time. We would certainly like to
							use their professional services again. Maybe it is one of the reasons their are the best out there!</p>
							<div class="author-details-box">
								<div class="author">Stacey, North Lynnwood</div>
								<div class="author-details">CLEANING TECHNICAN</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="column column-1-3">
				<div class="row testimonials-container type-small">
					<ul class="testimonials-list gray">
						<li>
							<p class="template-quote">We would like to thank Cleanmate company for an outstanding effort on this
							recently completed project located in the Moscow. The project involved a very
							aggressive schedule and it was completed on time. We would certainly like.</p>
							<div class="author-details-box">
								<div class="author">Stacey, North Lynnwood</div>
								<!--<div class="author-details">CLEANING TECHNICAN</div>-->
							</div>
						</li>
						<li>
							<p class="template-quote">We would like to thank Cleanmate company for an outstanding effort on this
							recently completed project located in the Moscow.</p>
							<div class="author-details-box">
								<div class="author">Stacey, North Lynnwood</div>
								<!--<div class="author-details">CLEANING TECHNICAN</div>-->
							</div>
						</li>
					</ul>
				</div>
			</div> --}}
		</div>



		<div class="row gray full-width page-margin-top-section padding-top-89 padding-bottom-100">
			<div class="row">
				<h3 class="align-center">BRANDS WHO TRUST US</h3>
				<div class="our-clients-list-container margin-top-40">
					<ul class="our-clients-list">
						@if(!empty($ourbrand))
						@foreach ($ourbrand as $data)
						<li class="vertical-align">
							<div class="our-clients-item-container">
								<div class="vertical-align-cell">
									<a href="{{ $data->link }}" title="{{ $data->title }}">
										<img src="{{ asset('') }}/images/brand/{{ $data->image }}" alt="">
									</a>
								</div>
							</div>
						</li>
						@endforeach 
						@endif
					</ul>
					<div class="cm-carousel-pagination"></div>
				</div>
			</div>
		</div>


	</div>
</div>
@endsection