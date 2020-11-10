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
</style>

<section id="mycarousel_client" style="background-image:url('{{ asset('') }}/images/company_logo.jpg');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="box-header mb-3">OUR CLIENTS</h2>
            </div>
        </div>

            <div class="col-md-12 col-lg-12 col-centered">

                <div class="owl-carousel owl-theme clientCarousel">
                    @if(!empty(App\Models\Ourbrand::where('status', 1)->orderby('id', 'DESC')->get()))

                        @foreach(App\Models\Ourbrand::where('status', 1)->orderby('id', 'DESC')->get() as $client)
                            <div class="item">

                                <div class="block img-responsive">
                                    <img style="object-fit: contain" src="{{ asset('') }}/images/brand/{{ $client->image }}">
                                </div>

                            </div>
                        @endforeach
                    @else
                    @endif

                </div>


            </div>
        </div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


<script>
    $('.clientCarousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        autoplayTimeout: 2000,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        }
    });
</script>
