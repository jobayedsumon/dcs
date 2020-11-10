	<section class="bg-color-eee p_40">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel owl-carousel owl-theme">
			           @if (!empty($ourclients))
			            @foreach ($ourclients as $data)
						<div class="item">
							<div class="img-box">
								<img src="/theme/img/clients/{{ $data->image }}" alt="">
							</div>
						</div>
						@endforeach 
						@endif 
					</div>
				</div>
			</div>
		</div>
	</section>