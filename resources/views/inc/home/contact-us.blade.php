	<!-- ######################Contact Us Card ######################-->
	<div class="contactUs" id="contact">
		<div class="container ">
			<br><br><br>
			<h1 class="text-vilot text-center text-height">Contact Us</h1>
			<br><br>
			<div class="row">
				<div class="col-6">
					<form id="form" action="{{ action('HomePagesController@store')}}" method="POST" >
						<div class="row">
							{{ csrf_field() }}
							<div class="col-6">
								<div class="form-group">
									<input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
								</div>	
							</div>

							<div class="col-6">
								<div class="form-group">
									<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
								</div>
							</div>

							<div class="col-12">
								<div class="form-group">
									<input type="text" id="email_address" name="email_address" class="form-control" placeholder="Email Address">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<textarea rows="10" class="form-control" placeholder="Comment" id="comment" name="comment"></textarea>
								</div>
							</div>
							<div class="col-8">						
							</div>
							<div class="col-4">
								<div class="form-group">
									<input type="submit" name="submit" value="Send Message" class="btn btn-lg ml-3" style="background: #94529c!important; color: #fff">							
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-1"></div>
				<div class="col-4">
					<div class="">
						<h2>Need to know more on details ? Call us on <span class="text-vilot">1800 XXXX XXX</span></h2>
						<h6 class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat.</h6 >
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
	</div>