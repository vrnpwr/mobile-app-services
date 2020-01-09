	<!--####################### Fotter #######################-->
	<div class="footer-card">		
		<div class="container">
			<div class="row">
				<div class="col-4">
					<p class="font-weight-bold">About Us</p>
					<small class="text-secondary font-weight-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
				</div>
				<div class="col-4">
					<p class="font-weight-bold">Details</p>
					<p class="text-secondary">Adress</p>
					<p class="text-secondary">Lorem Ipsum</p>
					<p class="text-secondary">Lorem Ipsum</p>
					<p class="text-secondary">Terms of Service</p>
				</div>
				<div class="col-4">
					<h6 class="font-weight-bold">
						Need Help??
					</h6>
					<img src="/front">
					<p>Subscribe to our newsletter</p>
					<form id="subscribe-form" method="POST" action="{{ action('SubscribersController@store')}}">							
						<div class="mb-3 d-flex justify-content-between">
							<input type="text" class="form-control" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="basic-addon2" id="email">								
							<input type="submit" id="call" name="" class="btn" value="subscribe" style="background: #94529c; color: #fff;">

						</div>
						<p id="subscribe-error" style="display: none; color: tomato;"></p>
					</form>
					<small>Follow Us</small><br>
					<i class="facebook f icon"></i> <i class="twitter icon"></i> <i class="instagram icon"></i> <i class="linkedin icon"></i>
				</div>
			</div>
			<br><br><br>
			<hr class="style-eight" />
			<br>
			<p class="text-center text-secondary ">copyright 2019 | All Right Reserved</p>
		</div>
	</div>