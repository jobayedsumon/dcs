<section id="our_client" style="background-image: url('{{ asset('company_logo.jpg')}}');">
	<div class="row">
		<div class="vmsl_latest_news">
			<h2 class="box-header">OUR CLIENTS</h2>
		</div>
	 </div>

	<div class="our_latest_post">
		<div class="example-box">
		   <div class="carousel-multiple-items">
			@if(!empty($clients))
			@foreach($clients as $client)
			<div class="column column-1-3">
				<a href="{{ url('posts/read/'.$client->alias) }}">
				  <div class="box">
					<div class="box_bg">
					
						<img src="{{ url('') }}/images/brand/{{ $client->image }}" alt="">
					
					</div>
				  </div>
			  </a>
			</div>
			@endforeach
			@endif
		  </div>
		  
		   <div class="carousel-multiple-items-for-mobile">
			@if(!empty($clients))
			@foreach($clients as $client)
			<div class="column column-1-3">
				<a href="{{ url('posts/read/'.$client->alias) }}">
				  <div class="box">
					<div class="box_bg">
						<img src="{{ url('') }}/uploads/images/{{ $client->image }}" alt="">
					</div>
				  </div>
			  </a>
			</div>
			@endforeach
			@endif
		  </div>
		  
		</div>
	</div>
</section>




<script typle="text/javascript" src="{{ asset('') }}dist/index.min.js"></script>
<script>
	new ElderCarousel('.carousel-multiple-items', { items:5,  play: true, navs: true})
	new ElderCarousel('.carousel-multiple-items-for-mobile', { items: 1,  play: true, navs: true})
</script>