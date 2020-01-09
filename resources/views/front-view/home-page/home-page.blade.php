	@extends('layouts.front')
	@section('title')
	Home-page
	@endsection

	@section('content')

	<!-- #################Slider################# -->
	@include('inc.home.slider')

	<!-- ################Portfolio################ -->
	@include('inc.home.portfolio')

	<!-- ################Services################ -->
	@include('inc.home.services')

	<!-- Big card -->
	<div class="big-card" id="whychoose">
		<div class="container text-center">
			<h1 class="text-vilot text-height">Why Choose Us?</h1>
			<p class="text-secondary font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p class="text-secondary font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur.</p>
		</div>
	</div>


<!-- ###############Testimonials############### -->
	@include('inc.home.testimonials')

<!-- ###################Blogs################### -->
	@include('inc.home.blogs')

<!-- #################Contact-Us################# -->
	@include('inc.home.contact-us')

<!-- ###################Footer################### -->
	@include('inc.home.footer')
	

	@endsection