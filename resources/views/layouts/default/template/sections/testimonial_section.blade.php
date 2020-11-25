





            <div id="demo2" class="row full-width p-5 parallax parallax-3 overlay carousel slide " >

                <div class="carousel-inner testimonials-list">

					@if(!empty(App\Models\Testimonial::where('status', 1)->orderby('id', 'DESC')->get()))
					@foreach (App\Models\Testimonial::where('status', 1)->orderby('id', 'DESC')->get() as $data)
					<div class="carousel-item {!! $loop->first ?  'active' : '' !!} text-center">
						<div class="testimonials-icon template-quote"></div>
						<p class="">{{ $data->dialogue }}</p>
						<h6>{{ $data->name }}, {{ $data->location }}</h6>
					</div>
					@endforeach
					@endif
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#demo2" data-slide="next">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </a>

            </div>



        <script>

                // $(document).ready(function () {
                //     $('.testimonials-carousel').lightSlider({
                //
                //         auto: true,
                //         pause: 8000,
                //         slideEndAnimation: true,
                //         controls: true,
                //         pager: false,
                //         prevHtml: '<i class="fa fa-chevron-left slidArrow" aria-hidden="true"></i>',
                //         nextHtml: '<i class="fa fa-chevron-right slidArrow" aria-hidden="true"></i>'
                //
                //
                //     });
                // });


        </script>

