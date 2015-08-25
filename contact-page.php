<?php
/*
Template Name: contact page template
*/

require "vendor/autoload.php";
//setup a mail object to user through out the file cycle of the mailer program

$sender    = $_POST['emailAddress'];
$firstName = $_POST['formName'];
$lastName  = $_POST['formLastName'];
$telephone = $_POST['formName'];
$message   = $_POST['formMessage'];


$mail = new PHPMailer();


$mail->isSMTP();
$mail->Mailer = 'smtp';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username   = "kuda09@gmail.com";
$mail->Password   = "305iamrich";
$mail->SMTPSecure = 'tls';
$mail->Port = 443;

$mail->SMTPSecure = 'tls';
$mail->isHTML( false );

$mail->setFrom( "kuda09@gmail.com" , "Kuda");
$mail->From     = $sender;
$mail->FromName = $firstName . " " . $lastName;
$mail->Subject  = "Contact Page Email";
$mail->Body     = $message;
$mail->addAddress("kuda09@gmail.com", "Sender's name" );

get_header(); ?>


	<article class="contactPage">
		<section class="map">
			<div class="googleMaps" id="map"></div>
		</section>
		<section class="contentArea">
			<div class="container">

				<div class="col">
					<h1>Contact Details</h1>

					<h2>Include Inc</h2>

					<p>
						<strong>5 Ibekwe Avenue,<br>65 Idua Road,<br> Eket<br> Nigeria</strong>
					</p>

					<ul class="contactDetails">
						<li><i class="fa fa-envelope-o"></i> includeincorporated@gmail.com</li>
						<li><i class="fa fa-phone"></i> +234 9022484146</li>
					</ul>
				</div>
				<div class="col">
					<h1>Leave your details, and we’ll contact you.</h1>

					<?php  if(isset($_POST['send'])): ?>

						<?php if(!$mail->send()): ?>
						<div class="errors">
							<?php echo "Unable to send email: " . $mail->ErrorInfo; ?>
						</div>

						<?php else : ?>

						<div class="success">
							<?php echo "Message has been sent successfully"; ?>
						</div>
						<?php endif; ?>
					<?php endif; ?>

					<form method="post" id="contactForm" class="contactForm" action="<?php echo get_permalink(); ?>">
						<label for="formTitle">Title</label>
						<select class="selectboxdiv" name="Title" id="formTitle">
							<option value="">Please select...</option>
							<option value="Mr">Mr</option>
							<option value="Mrs">Mrs</option>
							<option value="Miss">Miss</option>
							<option value="Ms">Ms</option>
						</select>

						<label for="formName">First Name*</label>
						<input type="text" id="formName" name="formName" placeholder="Enter your first name!!"/>

						<label for="formName">Last Name*</label>
						<input type="text" id="formLastName" name="formLastName" placeholder="Enter your last name!!"/>

						<label for="formName">Email Address*</label>
						<input type="text" id="emailAddress" name="emailAddress" placeholder="Enter your email address!!"/>

						<label for="formName">Telephone</label>
						<input type="text" id="telephone" name="telephone" placeholder="Enter your telephone!!"/>

						<label for="formMessage">Your Message</label>
						<textarea name="formMessage" id="formMessage" cols="30" rows="10" placeholder="Enter your message!!"></textarea>

						<input name="send" type="submit" class="btn btnPrimary" id="send" value="Send">
					</form>

				</div>
			</div>
		</section>
	</article>

<?php get_footer(); ?>