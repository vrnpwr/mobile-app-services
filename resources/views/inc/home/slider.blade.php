	<div>
		<!-- ##########################Slider########################## -->
		@if(count($sliders) > 0)
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			@foreach($sliders as $key=>$value)
			<ol class="carousel-indicators">
				@if($key==0)
				<li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="active"></li>
				@else
				<li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"></li>
				@endif
			</ol>
			<div class="carousel-inner">
				<?php $images = explode(',', $value->image); ?>
				@foreach($images as $keys=>$img)
				@if($keys == 0)
				<div class="carousel-item active">
					<img class="d-block w-100" src="/images/{{ $img }}" alt="First slide" style="width: 100vw; height: 80vh; opacity: 0.8;">
				</div>
				@else
				@if(!empty($img))
				<div class="carousel-item">
					<img class="d-block w-100" src="/images/{{ $img }}" alt="Second slide" style="width: 100vw; height: 80vh; opacity: 0.8;">
				</div>
				@endif
				@endif
				<div class="card-img-overlay" style="opacity: 0.8">
					<h1 class="card-title display-3" style="margin-top: 28vh;">Service 1</h1>
					<div class="container">
						<p class="card-text text-center" style="font-size: 1.2em; letter-spacing: 3px;">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="text-center">						
							<button class="transparent-btn" style="background: transparent; color: white;">Get in touch</button>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			@endforeach
		</div>
		@endif
	</div>
	<!-- ##########################Slider########################## -->