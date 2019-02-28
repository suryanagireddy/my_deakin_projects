<?php
require 'db.php';

$err="";
if (isset($_POST['contact'])) {
	$name = $_POST['names'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if (empty($name)) {
	echo $err= "First name is missing";
	}
	else if (empty($email)) {
		echo $err= "email is missing";
	}
	else if(empty($subject)){
		echo $err="subject cant be empty";
	}
	else if(empty($message)){
		echo $err="message cant be empty";
	}else{
	$sql = oci_parse($con, "INSERT INTO contact values(1,'$name','$email','$subject','$message')");
	oci_execute($sql);
	if ($sql) {
		echo "Thank you for contact us. we will get back to you soon";
	} else {
		echo oci_error();
	}}

	exit ;
}
?>

<!DOCTYPE  html>
<html>
	<head>

		<style>
			body {

				background-repeat: no-repeat;
				background-size: cover;
				background-position-x: center;
				background-position-y: center;
				text-align: justify;
				text-align: center;
			}
		</style>
		<meta charset="UTF-8"  />
		<title>Bookstore</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<script src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>

		<script src="js/main.js" type="text/javascript"></script>

		<script type="text/javascript">
			function validatefield() {
				var name = document.ContactForm.names;
				var email = document.ContactForm.email;
				var subject = document.ContactForm.subject;
				var msg = document.ContactForm.message;
				var err=document.ContactForm.err;
				
				if (name.value == "") {
					document.getElementById("nameerr").innerHTML = "You must enter a name";
            
					name.focus();
					return false;
				}
				if (email.value == "") {
					document.getElementById("emailerr").innerHTML = "You must enter a email";
            
					email.focus();
					return false;
				}
				 if (subject.value == "") {
					document.getElementById("subjecterr").innerHTML = "You must enter subject";
            
					
					return false;
				}
				 if (message.value == "") {
					document.getElementById("messageerr").innerHTML = "You must enter message";
            
					
					return false;
				}
			
			}

		</script>

	</head>
	<body>
		<!--menu bar-->
		<div class="navbar navbar-fixed-top" style="background-color: grey; color: white;font-size: 26">
			<div class="container-fluid">
				<h3 style="color: white">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand" style="color: white">Bookstore</a>
				</div>
				<ul class="nav navbar-nav" style="text-align: center; color: white; font-size: 26">
					<li>
						<a href="index.html" style="color: white">Home</a>
					</li>
					<li>
						<a href="bookdescription_page.html" style="color: white">Book description</a>
					</li>
					<li>
						<a href="booksearch.php" style="color: white">Book search</a>
					</li>
					<li>
						<a href="contact.php" style="color: white">Contact</a>
					</li>
					
					<li>
						<a href="viewcontacts.php" style="color: white">View Comments</a>
					</li>
				</ul></h3>

			</div>
		</div>
		<p>
			<br />
		</p>
		<p>
			<br />
		</p>
		<p>
			<br />
		</p>
		<!-- contact form-->
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-8">
					<div id="msg"></div>
					<form method="post" name="ContactForm" onSubmit= "return validatefield()">
						<div class="row">
							<div class="col-md-3">
								<label>Names</label>

							</div>
							<div class="col-md-4">
								<input type="text" name="names" id="names" size="50" /> <span id="nameerr" <?php echo $err ?> style="color: red"></span>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-3">
								<label>Email</label>
							</div>
							<div class="col-md-4">
								<input type="email" name="email" id="email"  size="50" /><span id="emailerr"  <?php echo $err; ?> style="color: red">
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-3">
								<label>Subject</label>
							</div>
							<div class="col-md-4">
								<input type="text" name="subject" id="subject"  size="50"/><span id="subjecterr"  <?php echo $err; ?> style="color: red">
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-3">
								<label>Message</label>
							</div>
							<div class="col-md-4">
								<textarea name="message" id="message" cols="50" rows="4"> </textarea>	<span id="messageerr" <?php echo $err; ?> style="color: red">							
							

							</div>
						</div>
						<div class="row">

							<input type="submit" class="btn btn-success" id="contact" name="contact" value="Send" />
						</div>

					</form>

				</div>
				<div class="col-md-2">
					<!--direct contact details-->
					<div class="panel panel-success">
						<div class="panel-heading">
							Contact Info
						</div>
						<div class="cpanel-body">
							Number: +61-497-913-797
							<br />
							Email: srnagire@gmail.com

						</div>
					</div>
				</div>
			</div>
			<hr />
			<!--footer-->
			<div class="panel-footer">
				&copy;
				welcome to our book store. contact +61-497-913-797

			</div>
		</div>
	</body>
</html>