
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

    .block {
        width: 306px;
        height: 230px;
        padding: 40px;
        overflow: hidden;
        background:#fff;
    }

    .fourBox {
        background-color: #0072AE;
        text-align: center;
        padding: 20px 0;
    }

    .fourBox p {
        color: #fff;
        font-size: 18px;
        font-weight: bold;
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

    .facts_wrapper {
        padding: 30px 0 10px 30px;
        margin-right: 0;
    }

    .servicesContact {
        background: url({{ asset('images/servcont.jpg') }}) no-repeat scroll center center;
        position: relative;
        padding: 85px 95px;
        margin-top: 10px;
    }

    .servicesContact:before {
        width: 100%;
        height: 100%;
        content: '';
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        background: rgba(8, 94, 173, .8);
        content: '';
        position: absolute;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #fff;
        opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #fff;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
        color: #fff;
    }

    .servicesContact input {
        width: 100%;
        margin-bottom: 19px;
        background: transparent;
        height: 50px;
        border: 1px solid #fff;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        padding: 10px 20px;
    }
    .serconttitle {
        color: #fff;
        font-size: 32px;
        font-weight: 400;
        margin-bottom: 40px;
        text-align: center;
    }
    .servicesContact textarea {
        height: 110px;
        border: 1px solid #fff;
        background: transparent;
        width: 100%;
        resize: none;
        color: #e6e6e6;
        margin-bottom: 25px;
        font-weight: 400;
        padding: 10px 20px;
    }
    .servicesContact select {
        -webkit-appearance: none;
        -moz-appearance: none;
        background: transparent;
        border: 1px solid #fff;
        font-size: 16px;
        height: 50px;
        padding: 10px 20px;
        width: 100%;
        color: #fff;
    }

    option:disabled {
        color: #000 !important;
        font-weight: bold !important;
        font-size: 20px !important;
    }
    option:invalid {
        color: #000 !important;
        font-weight: bold !important;
        font-size: 20px !important;
    }
    .servicesContact button {
        background: #0072AE none repeat scroll 0 0;
        color: #fff;
        border: 1px solid #fff;
        text-transform: uppercase;
        font-weight: 600;
        height: 50px;
        line-height: .8;
        padding: 17px 45px;
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
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

    .submitButton:hover {
        background-color: #fff;
        color: #0b60de;
        border-color: #0b60de;
    }

</style>


<div class="servicesContact">
    <form action="/booking" method="post" id="servicesForm">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <h2 class="serconttitle">Service Booking</h2>
            </div>
            <div class="col-lg-12">
                <input type="text" placeholder="Name *" id="ser_name" name="name" class="required">
            </div>
            <div class="col-lg-12">
                <input type="email" placeholder="Email *" id="ser_email" name="email" class="required">
            </div>
            <div class="col-lg-12">
                <input type="text" placeholder="Phone Number *" id="ser_phone" name="phone_number" class="required">
            </div>
            <div class="col-lg-12">
                <input type="text" placeholder="Zip / Postal Code *" id="ser_post" name="zip" class="required">
            </div>
            <div class="col-lg-12">
                <input type="text" placeholder="Address *" id="ser_adds" name="address" class="required">
            </div>
            <div class="col-lg-12">
                <input type="text" placeholder="City *" id="ser_city" name="city" class="required">
            </div>
            <div class="col-lg-12">
                <select id="ser_option" class="required" name="service_id">
                    <option selected="" value="0">Choose a services</option>

                    @php $primary = \App\Helpers\Helper::get_category(0); @endphp

                        <optgroup label="--------------------------------------------">
                            <option disabled><h1>{{ $primary[0]->title }}</h1></option>
                        </optgroup>


                            @forelse(Helper::get_category($primary[0]->id) as $sub_category)

                            <optgroup>
                                <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                            </optgroup>



                            @empty
                            @endforelse

                    <optgroup label="--------------------------------------------">
                        <option disabled>{{ $primary[1]->title }}</option>
                    </optgroup>

                    @forelse(Helper::get_category($primary[1]->id) as $sub_category)

                        <optgroup>
                            <option value="{{ $sub_category->id }}">{{ $sub_category->title }}</option>
                        </optgroup>



                    @empty
                    @endforelse


                </select>
            </div>
            <div class="col-lg-12">
                <textarea placeholder="Special Notes" id="ser_comment" name="comments" class="required"></textarea>
            </div>
            <div class="col-lg-12">
                <button class="submitButton" type="submit" id="ser_submit">submit</button>
            </div>
        </div>
    </form>
</div>

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
