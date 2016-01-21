<?php include('includes/header.php'); ?>

    <!-- Begin Text -->
    <article id="text">
    <h2>Contact Me</h2>  
    <p>Give me a shout!</p>
    
	<?php
    
    if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
    
        $mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email
        
        $mailSubject = "{$_POST['subject']}"; // subject of the email
        
        $mailRecipient = "sinkum@uw.edu"; // destination email address
        
        $mailSender = "From: {$_POST['email']}"; // the mail sender
        
        mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email
        
        print ("<p>Thank you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
    
    }
    
    ?>
    
    <!-- Begin Contact Form -->
    <form action="contact.php" method="post" name="contact">
    <label for="name">Name:</label>
    <input name="name" type="text" required="required">
    <label for="email">Email:</label>
    <input name="email" type="email" required="required">
    <label for="subject">Subject:</label>
    <select name="subject">
      <option value="General Inquiry" selected="selected">General Inquiry</option>
      <option value="Specific Inquiry">X</option>
      <option value="Stoopid Inquiry">Stoopid Inquiry</option>
    </select>
    <label for="message">Message:</label>
    <textarea name="message" cols="40" rows="5" required="required"></textarea>
    <input name="submit" type="submit" value="Submit Message">
    </form>
    <!-- End Contact Form -->
    
    </article>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <aside id="sidebar">
    <h2>Contact</h2>
    <ul>
    <li><a href="#">Lorem ipsum dolor</a></li>
    <li><a href="#">Aliquam tincidunt</a></li>
    <li><a href="#">Vestibulum auctor</a></li>
    </ul>    </aside>
    <!-- End Sidebar -->
    
<?php include('includes/footer.php'); ?>