<?php

	if($_POST["submit"]) {
		
		$result = '<div class="alert alert-success">Form submitted</div>';
		
		if(!$_POST['name']) {
			$error = "<br />Please enter your name";
		}
	
		if(!$_POST['email']) {
			$error.= "<br />Please enter your email address";
		}
		
		if(!$_POST['comment']) {
			$error.= "<br />Please enter a comment";
		}
		
		if($error){
			$result = '<div class="alert alert-danger"><strong>There were error(s) in your form:'.$error.'</strong></div>';
		} else {
		
			if (mail("pradyumanvig@hotmail.com", "Comment from website","Name: ".$_POST['name']." 
			
			Email: ".$_POST['email']."
			
			Comment: ".$_POST['comment'])) {
				$result = '<div class="alert alert-success">Form submitted. <strong>Thank you!</strong></div>';
			} else {
				$result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
			};
		}
	}
?>
<!doctype html>
<html>
<head>
    <title>Learning PHP</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<met name="description" content="A journey of a thousand miles begins with a single step." />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="jquery.min.js"></script>
	
	<style>
	
		.emailForm {
			border:1px solid gray;
			border-radius:10px;
		}
		
		#erroremail {
			display:none;
		}
		
		#errorname {
			display:none;
		}
		
		#errorcomment {
			display:none;
		}
		
		form {
			padding-bottom:15px;
		}
	</style>
	
</head>
<body>

	<div id="container">
	
		<div id="row">
	
		<div class="col-md-6 col-md-offset-3 emailForm">
		
			<h1>My email form</h1>
			
			<?php echo $result; ?>
			
			<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>
	
			<form method="post" id="validatedForm">
		
				<div class="form-group">
					<label for="name">Your Name:</label>
					<input name="name" id="name" placeholder="Your Name" class="form-control" value="<?php echo $_POST['name']; ?>"/>
					<div id="errorname" class="form-control"></div>
				</div>
				
				<div class="form-group">
					<label for="email">Your Email:</label>
					<input name="email" id="email" placeholder="Your Email" class="form-control" value="<?php echo $_POST['email']; ?>"/>
					<div id="erroremail" class="form-control"></div>
				</div>
		
				<div class="form-group">
					<label for="comment"> Your Comment </label>
					<textarea name="comment" id="comment" class="form-control"><?php echo $_POST['comment']; ?></textarea>
					<div id="errorcomment" class="form-control"></div>
				</div>
						
				<input id="submitButton" name="submit" class="btn btn-success" type="submit" value="Submit" />

			</form>
	
		<div>

	</div>
	
</body>
</html>