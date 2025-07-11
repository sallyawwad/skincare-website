<footer>
		<div class="footerContainer">
		<div class="newsletter">
			<p class="pfooter1">SIGN UP FOR EMAIL TEXTS FOR THE LATEST UPDATES, SPECIAL OFFERS, AND MORE.</p>
			<p class="pfooter2">By entering your email address and clicking "Join Us" you agree to receive marketing email messages from Rare Beauty at the email address provided. Unsubscribe at any time.</p>
			
			<form action="subscribe.php" method="POST" id="subscribeForm">
        		<input type="email" id="email" name="email" placeholder="Your Email" required>
        		<button type="submit" class="JoinUs">Join Us &#8594;</button>
    		</form>
			

			<script>
    		document.getElementById("subscribeForm").addEventListener("submit", function(event) {
			event.preventDefault(); // Prevent the default form submission
			
			var emailInput = document.getElementById("email").value;
			// Perform additional validation if needed
			
			// Display the alert
			alert("Thank you for subscribing to our newsletter!");
        
        
    		});
			</script>
			<hr>
			
				<p class="connect">Connect with us</0>
              <ul class="footer-ul">
                <li><a href="#"><i class="fa-brands fa-instagram fa-2xl" style="color: #7f2546;"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook fa-2xl" style="color: #7f2546;"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter fa-2xl" style="color: #7f2546;"></i></a></li>
              </ul>
			
			<br>
			<hr>
			
				<p class="connect">Company</0>
					<ul class="footer-ul-2">
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="privacy.php">Privacy Policy</a></li>
					</ul>
			</div>
			
			<div class="maps">
				<p class="ourlocation">Our Location</p>
				<div class="map_canvas">
					<iframe width="100%" height="200" id="gmap_canvas"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.293468430222!2d35.5005655151662!3d33.856326980659695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1760d7c6f333%3A0xf7c29c0898692ff9!2sUSAL%20-%20University%20Of%20Sciences%20And%20Arts%20In%20Lebanon!5e0!3m2!1sen!2sus!4v1679926001813!5m2!1sen!2sus" 
					frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
					</iframe>
				</div>
			</div>
		</div>
	</footer>