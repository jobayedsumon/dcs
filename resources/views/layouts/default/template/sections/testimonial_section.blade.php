		<div class="row full-width pt-5 pb-2 parallax parallax-3 overlay">
			<div class="row ">
				<div class="testimonials-list testimonials-carousel owl-carousel owl-theme" id="testimonialCarousel" >

					@if(!empty(App\Models\Testimonial::where('status', 1)->orderby('id', 'DESC')->get()))
					@foreach (App\Models\Testimonial::where('status', 1)->orderby('id', 'DESC')->get() as $data)
					<div class="item text-center">
						<div class="testimonials-icon template-quote"></div>
						<p class="">{{ $data->dialogue }}</p>
						<h6>{{ $data->name }}, {{ $data->location }}</h6>
					</div>
					@endforeach
					@endif
				</div>
			</div>
		</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


        <script>
            $('#testimonialCarousel').owlCarousel({
                loop:true,
                autoplay: true,
                autoplayTimeout: 8000,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        </script>

