	<!-- Our Services -->
	<div class="card bg-dark text-white" id="services">
		<img src="/front/apple.jpg" style="width: 100vw; height: 100vh; opacity: 0.5;">
		<div class="card-img-overlay">
			<div class="container text-center">
				<br><br><br>
				<h1>Our Services</h1>
				<br><br>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<!-- cards -->
				<div class="row mt-3">
					@if(count($services)>0)
					@foreach($services as $key => $value)
					<div class="col-4" >
						<div class="card">
							<div class="card-body" style="min-height: 40vh;">
								<i class="big circular inverted {{$value->image}} icon"></i>
								<h3 class="card-text text-dark">{{ $value->title}}</h3>
								<small class="text-secondary text-center font-weight-bold">{{ $value->content}}</small>
							</div>
						</div>
					</div>

					@endforeach
					@endif
				</div>

			</div>
		</div>
	</div>
