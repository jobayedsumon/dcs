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

                <ul class="clientCarousel">
                    @if(!empty(App\Models\Ourbrand::where('status', 1)->orderby('id', 'DESC')->get()))

                        @foreach(App\Models\Ourbrand::where('status', 1)->orderby('id', 'DESC')->get() as $client)
                            <li class="">

                                <div class="block img-responsive">
                                    <img class="pb-5" style="object-fit: contain; height: 150px" src="{{ asset('') }}/images/brand/{{ $client->image }}">
                                </div>

                            </li>
                        @endforeach
                    @else
                    @endif

                </ul>


            </div>
        </div>

</section>


<script>
    $(document).ready(function () {
        $('.clientCarousel').lightSlider({
            item: 4,
            slideMove: 4,
            auto: true,
            pause: 5000,
            slideEndAnimation: true,
            controls: false,
            pager: false,
            prevHtml: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
            nextHtml: '<i class="fa fa-chevron-right" aria-hidden="true"></i>'


        });
    });

</script>
