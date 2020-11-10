@extends('layouts.default.master')
@section('content')
<style>
.vmsl_padding{
   padding: 0% 10% 5% 10%;
}
.vmsl_padding p{
    padding-top: 20px;
    font-family: inherit;
    text-align: center;

}
.pp_description{
    margin-bottom:0px !important;
    padding-bottom: 0px !important;

}
.pp_description p{
    margin-bottom:0px !important;
    padding-bottom:0px !important;
}
.vmsl_row .column {
    padding:10px;
    margin-left: 0px;
}
.gallery_paginate{
    margin-top: 20px;
}
#pp_full_res img{
    width: 100% !important;
    height: 100% !important;
}
div.pp_default .pp_close {
    width: 50px;
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
</style>
<div id="myportfolio" class="theme-page padding-bottom-100">
	<div class="row gray full-width page-header vertical-align-table" style="background-image: url('{{ asset("images/portfoiol.jpg") }}'); background-size: cover; height: 300px">
		<div class="row">
			<div class="page-header-left">
				<h1>OUR GALLERY</h1>
			</div>
			<div class="page-header-right">
				<div class="bread-crumb-container">
					<ul class="bread-crumb">
						<li>
							<a title="Home" href="{{ url('') }}">
								Home
							</a>
						</li>
						<li class="separator">
							&#47;
						</li>
						<li>
							Our Gallery
						</li>


					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix">
		<div class="row page-margin-top-section">
	        <div class="row">
	            <div class="vmsl_padding">
	                <h2 class="box-header">The service you want, when you want it.</h2>
	                <p>We discuss your needs to develop and implement our cleaning services, meeting your specific demands and your schedule. More importantly, we do what we say we’re going to do and follow up with you to confirm your complete satisfaction.</p>
	            </div>
	      	</div>
			<div class="row vmsl_row">
			    @if(!empty($Portfolios))
			    @foreach($Portfolios as $portfolio)
				<div class="column column-1-3">
					<a href="{{ asset('') }}images/portfolio/{{ $portfolio->image }}" class="prettyPhoto cm-preload" onmouseover="this.title='{{ Helper::get_category_title($portfolio->category) }}';" onclick="this.title='<h4>{{ Helper::get_category_title($portfolio->category) }}</h4> {{ $portfolio->description }} ';">
						<img src='{{ asset('') }}images/portfolio/{{ $portfolio->image }}' alt='img'>
					</a>
				</div>
				@endforeach
				@endif
			</div>
			<div class="row">
			    <div class="gallery_paginate">
			        {{ $Portfolios->links() }}
			    </div>
			</div>
		</div>
	</div>
</div>
@include('layouts.default.template.sections.client_section');
@endsection
