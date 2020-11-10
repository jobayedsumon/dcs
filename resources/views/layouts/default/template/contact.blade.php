@extends('layouts.default.master')
@section('content')
<style>
.breadcrumbSection {
    position: relative;
    width: 100%;
    height: auto;
    background: url(../images/contact.jpg) no-repeat center center / cover;
    padding: 150px 0 115px;
    margin-bottom: 50px;
}

.pageTitle {
    text-align: left;
    line-height: .8;
    margin: 0;
}
.pageTitle h2 {
    font-size: 36px;
    font-family: Montserrat;
    font-weight: 400;
    color: #0072AE;
    letter-spacing: .72px;
    margin: 0;
    line-height: .7;
}
.pageBreadcrumb {
    position: relative;
    width: 100%;
    text-align: right;
    line-height: .7;
    padding-top: 7px;
}
.pageBreadcrumb a, .pageBreadcrumb span {
    font-family: Montserrat;
    font-size: 14px;
    letter-spacing: .28px;
    text-transform: capitalize;
    color: #FFF;
    line-height: .7;
    font-weight: 400;
}
#mycontact_form .row{
	width:100% !important;
}
.sf-menu li a{
	color:#333 !important;

}
.sf-menu li {
	color:#333 !important;

}
.contact-details li {
    color: #9a9a9a;
}
.contact-details li a {
    color: #9a9a9a;
}
.form-group{
    margin: 0 0 20px;
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
    color: rgba(8, 94, 173, .8);
    background-color: #fff;
    border: 1px solid rgba(8, 94, 173, .8);
}
</style>

<section class="breadcrumbSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="pageTitle">
{{--					<h2>Contact</h2>--}}
				</div>
			</div>
			<div class="col-lg-6">
				<div class="pageBreadcrumb">
					<a href="index.html">Home</a>
					<span>&nbsp; / &nbsp;</span>
					<a href="#">Contact</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="theme-page padding-bottom-100 contact_section">
	<div class="clearfix">
		<div class="row full-width">
			<div class="contact-map" id="map" data-scroll-wheel="0" data-marker-lat="45.4005763" data-marker-lng="-75.6837527" data-map-center-lat="45.4005763" data-map-center-lng="-75.6805812">
			    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2170.6371560310736!2d90.42351980389809!3d23.79860636727256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73573554939%3A0x463a2431c2d3f21d!2sDCS%20ORGANIZATION%20LTD.!5e0!3m2!1sen!2sbd!4v1594975025587!5m2!1sen!2sbd" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		    </div>
		</div>
	</div>
</div>

<section id="mycontact_form">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="{{ route('contact.message') }}" method="post">
				    @csrf
					<div class="row">
						<div class="col-md-6 p-0">
							<div class="form-group">
								<input type="text" name="fname" class="form-control" placeholder="First name*">
								<small style="color:red"> {{ $errors->first('fname') }} </small>
							</div>
						</div>
						<div class="col-md-6  pr-0">
							<div class="form-group">
								<input type="text" name="lname" class="form-control" placeholder="Last name*">
								<small style="color:red"> {{ $errors->first('lname') }} </small>
							</div>
						</div>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Enter email*">
						<small style="color:red"> {{ $errors->first('email') }} </small>
					</div>
					<div class="form-group">
						<textarea type="text" name="message"  placeholder="Message"></textarea>
						<small style="color:red"> {{ $errors->first('message') }} </small>
					</div>
				  <button type="submit" class="btn myBtn">Send</button>
				</form>
				  @if(Session::has('message'))
                    <p style="color:green; font-size:20px;">{{ Session::get('message') }}</p>
                  @endif
				  @if(Session::has('error'))
                    <p style="color:red; font-size:20px;">{{ Session::get('error') }}</p>
                  @endif
			</div>
			<div class="col-md-4 ouraddress">
				<div class="row">
					<div class="col-md-2">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<div class="col-md-10">
						<h3>Office Address</h3>
						<p class="p-0">House- 11 (5th floor),Road- 1, Block J,Baridhara, Dhaka- 1212</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<div class="col-md-10">
						<h3>Phone Numbers</h3>
						<p class="p-0">Hotline: 01979606001-3</p>
						<p class="p-0">Landphone: 0258810200</p>
						<p class="p-0">Direct Contact : +880 1783-877630</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<div class="col-md-10">
						<h3>E-Mail Address</h3>
						<p class="p-0">hello@dcsorgbd.com</p>
						<p class="p-0">dcsorganization@gmail.com</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@include('layouts.default.template.sections.client_section');

@endsection
