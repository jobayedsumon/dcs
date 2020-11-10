@extends('layouts.default.master')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
         <script>setTimeout(function(){ jQuery('.alert-success').remove(); }, 5000);</script>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
             <script>setTimeout(function(){ jQuery('.alert-danger').remove(); }, 5000);</script>
    </div>
@endif


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

</style>

<section class="no-padding">
    <div class="background_image" style="background-image:url('/uploads/images/{{$career->banner}}')">
      
       <div class="full-screen">
        
		<div class="banner_center text-center text-white">
			<h4 class="text-white">BE OUR</h4>
			<h2>{{$career->title}}</h2>
		</div>
		
		 <div class="scroll-bottom scroll-bottom-home">
		 </div>
          
       </div>
    </div>
</section>


<section id="apply_career">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <p class="date_item">Post Date: {{ date('d M, Y', strtotime($career->post_date)) }}</p>
			 <!-- <p class="date_item red-text">Application Deadline: {{ date('d M, Y', strtotime($career->post_end_date)) }}</p> -->
			  {!! $career->description !!}
		</div>
	</div>
</div>
</section>
<section class="career_form_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
            		<div class="no-padding container_form">
                        <h5 class="car_title">Fill up the following things</h5>
                		 <form id="career" method="post" action="/savecareer" enctype='multipart/form-data' >
                				<input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name">
                				<input class="form-control" type="text" id="lname" name="lastname" placeholder="Last name">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Email">
                                <input class="form-control" type="phone" id="phone" name="phone" placeholder="Phone number">
                                <p class="resume">Upload your resume</p>
                                <input class="form-control" type="file" id="cv" name="cv" accept=".doc,.docx,.pdf">
                                <input type="hidden" name="job_post" value="{{$career->id}}" >
                                <input type="hidden" name="job_title" value="{{$career->title}}" >
                				<textarea class="form-control" id="cover_letter" name="cover_letter" placeholder="Write cover letter" style="height:200px"></textarea>
                				<button class="scpl_btn" value="submit" type="submit">Apply Now</button>
                           </form>
                        <p class="respone"></p>
                    </div>
                </div>
            </div>
        </div>
</section>

<script>
    jQuery(document).on('click','.scpl_btn',function(event){
       jQuery(this).unbind(event);
       jQuery("form#career :input").each(function(){
         var input = $(this);
            if( !input.val() ) {
                event.preventDefault();
                jQuery('.respone').html('<p style="color:red;margin-top: 10px;">*All fields are required!</p>');
            }
        });
    });
</script>

@endsection