	<!-- #######################testimonial card####################### -->
	<div class="card bg-dark text-white" id="testimonial">
		<img src="/front/testimonial.jpg" style="width: 100vw; height: 100vh; opacity: 0.2;">
		<div class="card-img-overlay">
			<div class="container text-center">
				<br>
				<h1 class="text-height">Testimonial</h1>
				<br>			

				<!-- cards -->
				<div class="row mt-3">
					@if(count($testimonials) > 0)
					@foreach($testimonials as $key => $value)
					<div class="col-4">
						<img src="/images/{{ $value->image }}" class="rounded-circle"  style="width: 150px; height: 150px; position: relative; top: 50px; z-index: 999;">
						<div class="card">
							<div class="card-body">
								<br><br>
								<h1 class="text-vilot float-left">"</h1>
								<br>
								<h3 class="text-center text-secondary">Joseph</h3>
								<small class="text-secondary text-center font-weight-bold">{{ $value->review }}.</small>

								<h1 class="text-vilot float-right">"</h1>
							</div>
						</div>
					</div>
					@endforeach
					@endif
				</div>

			</div>
		</div>
	</div>