<?php include('includes/header.php'); ?>

		<!-- Begin Text -->
		<div id="text">
			<h2>Contact: Header Level Two</h2>
			
			<?php // Form Handling Script
			
			if ( isset ($_POST['submit']) ) { // if the submit button has been clicked
				
				$mailRecipient = 'sinkum@uw.edu'; // use this email address
				
				$mailMessage = $_POST['message']; // use the message from the message field
				
				$mailSubject = $_POST['subject']; // use the subject from the select menu
				
				$mailSender = 'From:'.$_POST['email']; // use the email from the email field
				
				mail($mailRecipient, $mailSubject, $mailMessage, $mailSender); // send the mail
				
				print '<p>Your email has been sent, <strong>'.$_POST['name'].'</strong>!</p>'; // let the user know their email has been sent
				
			}
			
			?>
		
			
			<!-- Begin Contact Form -->
			<form action="contact-too.php" method="post" name="contact" id="contact-form">
				<label for="name">Name:</label>
				<input type="text" name="name" required >
				<label for="email">Email:</label>
				<input type="email" name="email" required >
				<label for="subject">Subject:</label>
				<select name="subject">
					<option value="General Inquiry" selected>General Inquiry</option>
					<option value="Another Inquiry">Another Inquiry</option>
					<option value="Last Inquiry">Last Inquiry</option>
					<option value="Cheese Burgers">Cheese Burgers</option>
				</select>
				<label for="message">Message:</label>
				<textarea name="message" cols="40" rows="5" required ></textarea>
				<button type="submit" name="submit">Submit</button>
			
			</form>
			<!-- End Contact Form -->
			
		</div>
		<!-- End Text -->
		
		<!-- Begin Sidebar -->
		<div id="sidebar">
			<h2>Contact: Page Headline</h2>
			<ul>
				<li>Duis faucibus sodales</li>
				<li>Ut rhoncus massa</li>
				<li>Integer sodales magna</li>
			</ul>
		</div>
		<!-- End Sidebar -->

<?php include('includes/footer.php'); ?>