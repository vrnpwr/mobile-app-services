		<!-- sementic -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.customer-logos').slick({
					slidesToShow: 6,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 1000,
					arrows: false,
					dots: false,
					pauseOnHover: false,
					responsive: [{
						breakpoint: 768,
						settings: {
							slidesToShow: 4
						}
					}, {
						breakpoint: 520,
						settings: {
							slidesToShow: 3
						}
					}]
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.customer-logos').slick({
					slidesToShow: 6,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 1500,
					arrows: false,
					dots: false,
					pauseOnHover: false,
					responsive: [{
						breakpoint: 768,
						settings: {
							slidesToShow: 4
						}
					}, {
						breakpoint: 520,
						settings: {
							slidesToShow: 3
						}
					}]
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {				
				$("#form").submit(function(e) {
					var first_name = $('#first_name').val();
					var last_name = $('#last_name').val();
					var email_address = $('#email_address').val();
					var comment = $('#comment').val();
					var _token = "{{ csrf_token() }}";
					e.preventDefault(); 
					$.ajax({
						type: "POST",
						url: $('#form').attr('action'),
						data: {first_name,last_name,email_address,comment,_token}, 
						success: function(data)
						{
							document.getElementById("form").reset();
						}
					});
				});				
				$("#subscribe-form").submit(function(e) {
					var email = $('#email').val();
					var _token = "{{ csrf_token() }}";
					e.preventDefault(); 
					$.ajax({
						type: "POST",
						url: $('#subscribe-form').attr('action'),
						data: {email,_token}, 
						success: function(data)
						{
							document.getElementById("subscribe-form").reset();
							let message = JSON.parse(data.statusText);
							console.log("You Subscribed Our News letter");
							if (true) {
								$('#subscribe-error').show();
								$('#subscribe-error').html("You Subscribed Our News letter");
							}
						},
						complete: function(r) {
							var message = JSON.parse(r.responseText);
							$('#subscribe-error').show();
							$('#subscribe-error').html(message.errors.email);
							console.log(message.errors.email);
						}
					});
				});
			});
			$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>	
<!-- sementic -->
<script type="text/javascript">
	$('.menu .item').tab();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ################script################ -->
</body>
</html>