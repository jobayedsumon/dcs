@extends('layouts.default.master')
@section('content')
<style>
.faq_banner{
	background-image: url({{ asset('') }}/images/faq.jpg);
	height: 500px;
	width: 100%;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
}
.full_faq{
	padding-top: 100px;
    padding-bottom: 100px;	
}
.question{
	padding: 18px 14px 40px 20px;
    
    background: #F6F6F6;
}
.question span{
    float: right;
    font-size: 20px;
    font-weight: 700;
    height: 40px;
    cursor: pointer;
    margin-top: -20px;
    padding-top: 20px;
    color:#0067a0;
}
.question h4{
	float: left;
	font-weight: 400;
    font-size: 15px;
    font-family: 'Raleway', 'Arial', sans-serif;
    color: #303030;
}
.anwser{
	display: none;
}
.parent{
	margin-bottom: 10px;
}
.full_faq ul{
	padding-top: 30px;
}
.sumbit_qstn{
	text-align: center;
	margin-top: 100px;
}
@media only screen and (max-width: 768px){
.question span {
	margin-top: -15px;
    padding-top: 20px;
    position: absolute;
    z-index: 9999;
    margin-right: 10px;
    right: 0px;
}
.heading{
	padding-left: 15px;
}
.question {
    padding: 18px 14px 60px 20px;
}
.sumbit_qstn{
	text-align: center;
	margin-top: 40px;
}
.full_faq{
	padding-top: 50px;
    padding-bottom: 20px;	
}
}
</style>
<div class="faq_banner"></div>

<div class="full_faq">
	<div class="row">
		<div class="column column-1-2">
			<!--<h4 class="heading">COMMERCIAL SERVICES FAQS</h4>-->
			<ul class="" >
				@if(!empty($commercial_faq))
				@foreach ($commercial_faq as $data)
				<li class="parent">
					<div id="" class="question">
						<h4>{{ \Illuminate\Support\Str::limit($data->question, 70) }}</h4>
						<span class="ui-accordion-header-icon ui-icon template-plus"></span>
					</div>
					<div id="children"  class="anwser">
						{!! $data->answer !!}
					</div>
				</li>
				@endforeach
				@endif
			</ul>
		</div>
		<div class="column column-1-2">
			<!--<h4 class="heading">RESIDENTIAL SERVICES FAQS</h4>-->
			<ul class="">
				@if(!empty($residential_faq))
				@foreach ($residential_faq as $data)
				<li class="parent">
					<div class="question">
						<h4>{{ \Illuminate\Support\Str::limit($data->question, 70) }}</h4>
						<span class="ui-accordion-header-icon ui-icon template-plus"></span>
					</div>
					<div id="children"  class="anwser">
						{!! $data->answer !!}
					</div>
				</li>
				@endforeach
				@endif

			</ul>
		</div>
	</div>
	<div class="row">
		<h4 class="sumbit_qstn">SUBMIT A QUESTION</h4>
	</div>
	@include('layouts.default.template.sections.contact_section');

</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>




jQuery(document).on('click','.template-plus',function(){
	jQuery('.anwser').hide();
	jQuery('.question').css({'background':'#F6F6F6', 'color':'#303030'});
	jQuery('.question h4').css({'color':'#303030'});
	jQuery('.ui-icon').removeClass("template-minus").addClass("template-plus");
	jQuery(this).removeClass("template-plus").addClass("template-minus");
	jQuery(this).closest('.parent').find('.anwser').slideDown();
	jQuery(this).parent('.question').css({'background':'#56B665', 'color':'#fff'});
	jQuery(this).closest('.parent').find('.question h4').css({'color':'#fff'});
});
jQuery(document).on('click','.template-minus',function(){
	jQuery(this).removeClass("template-minus").addClass("template-plus");
	jQuery(this).closest('.parent').find('.anwser').slideUp();
	jQuery(this).parent('.question').css({'background':'#F6F6F6', 'color':'#303030'});
	jQuery(this).closest('.parent').find('.question h4').css({'color':'#303030'});
});


</script>
@endsection