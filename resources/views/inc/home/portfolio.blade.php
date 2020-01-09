<!-- content with tabbing area -->
	<div class="container mb-5 mt-5 p-5">
		<div class="ui top attached tabular menu">
			<a class="item active" data-tab="first">First</a>
			<a class="item" data-tab="second">Second</a>
			<a class="item" data-tab="third">Third</a>
		</div>
		<div class="ui bottom attached tab segment active" data-tab="first">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.
		</div>
		<div class="ui bottom attached tab segment" data-tab="second">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.
		</div>
		<div class="ui bottom attached tab segment" data-tab="third">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor.
		</div>
	</div>
	<!-- content with tabbing area -->

	<!-- ########################portfolio design######################## -->
	<div class="container" id="portfolio">
		<h1 class="text-center text-height" style="color: #9741a3;">Portfolio</h1>			
		<ul id="menu" class="text-center">
			<li><a href="#">Mobile Apps</a></li>
			<li><a href="#">Designs</a></li>
			<li><a href="#">Best Picks</a></li>
		</ul>
		@if(count($portfolios)>0)
		<div class="row">
			<div class="col-md-2"></div>			
			<div class="col-md-8">
				<div class="row">						
					@foreach($portfolios as $key => $value)
					<div class="col-md-4">
						<img src="/images/{{ $value->image}}" style="margin-bottom: 30px;">
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>	
		@endif
	</div>
	<!-- portfolio design -->

	<!-- our key clients -->
	<h2 class="text-center text-vilot text-height" id="clients">
		Our Key Clients
	</h2>
	<!-- key-clients data -->
	<div class="row pt-5 pb-5">
		<div class="container">
			<section class="customer-logos slider">
				@foreach($keyclients as $key=>$value)
				<div class="slide">
					<img src="/images/{{ $value->image  }}" >
				</div>
				@endforeach
			</section>
		</div>
	</div>
	<!-- our key clients -->