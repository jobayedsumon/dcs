@extends('layouts.default.master')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<style>
.btn-primary{
	background: #0067A0;
    padding: 8px;
    border: none;
    color: white;
    font-size: 20px;
    float: left;
    margin-right: 20px;
    cursor: pointer;
    margin-bottom: 10px;

}
.btn-primary:hover {
    color: #000;
}
#residensial{
	background: #0067A0;
	padding: 8px;
	color: white;
	border: none;
	font-size: 20px;
	float: left;
 	cursor: pointer;
}
.vmsl_button{
	padding-bottom: 50px;
}
.vmsl_button a:hover{
	text-decoration: none;
}
@media only screen and (max-width: 768px) {
	.vmsl_button {
	    margin-left: 15px;
	}
}
.pagination li a:hover{
    background-color: #0067a0;
    color: #fff;
}
.page-margin-top-section hr{
    margin-bottom: 20px;
}
.pagination {
    margin-top: 30px;
}
@media screen and (max-device-width: 479px) and (min-device-width: 321px){
.row {
    width: 100%;
}
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

</style>


<div class="theme-page padding-bottom-100">
	<div class="row gray full-width page-header vertical-align-table" style="background: url('{{ asset("images/service-page.jpg") }}') no-repeat; background-size: cover; height: 500px">
		<div class="row">
			<div class="page-header-left">
				<h1>OUR SERVICES</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li><a title="Home" href="{{ url('/') }}">Home</a></li>
						<li class="separator">
							&#47;
						</li>
						<li>
							Services
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix">
		<div class="row page-margin-top-section">
			<div class="row">
				<div class="vmsl_button">
					<?php
						 $primary_cat = Helper::get_category(0);
						 if (!empty($primary_cat)) {
						 	foreach ($primary_cat as $primary) {
					?>
					<a href="<?php echo route('get.services', $primary->id); ?>" class="btn btn-primary" id="commercial"><?php echo $primary->title; ?></a>
					<?php }}?>
				</div>
				<hr/>
			</div>
			<div class="services-list gray clearfix row">

				@if(!empty($service))
				@foreach ($service as $commercial)
				<div class="col-4">
					<a href="{{ route('single.service', $commercial->id) }}" >
{{--						<img src="{{ asset('') }}/images/service/{{ explode(',',$commercial->image)[0]  }}" alt="">--}}

					<h4 class="box-header"><a href="{{ route('single.service', $commercial->id) }}" title="{{ Helper::get_category_title($commercial->id) }}">{{ Helper::get_category_title($commercial->id) }}</a></h4>
					<p style="text-align: justify">{{ \Illuminate\Support\Str::limit($commercial->short_description ?? strip_tags($commercial->description), 200) }}</p>
                    </a>
				</div>
				@endforeach
				@endif
			</div>
			<div class="row">
				{{ $service->links() }}
			</div>
		</div>
	</div>
</div>

@include('layouts.default.template.sections.client_section');

@endsection
