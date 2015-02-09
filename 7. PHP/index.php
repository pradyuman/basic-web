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
					<input name="name" id="name" placeholder="Your Name" class="form-control"/>
					<div id="errorname" class="form-control"></div>
				</div>
				
				<div class="form-group">
					<label for="email">Your Email:</label>
					<input name="email" id="email" placeholder="Your Email" class="form-control"/>
					<div id="erroremail" class="form-control"></div>
				</div>
		
				<div class="form-group">
					<label for="comment"> Your Comment </label>
					<textarea name="comment" id="comment" class="form-control"></textarea>
					<div id="errorcomment" class="form-control"></div>
				</div>
						
				<input id="submitButton" name="submit" class="btn btn-success" type="submit" value="Submit" />

			</form>
	
		<div>

	</div>
	
	<script>
	
		$("#validatedForm").submit(function(event) {
		
			var error = 0;
		
			clearerror("#erroremail");
		
			event.preventDefault();
			
		/*	if (!isValidEmailAddress($("#email").val())) {
				
				$("#erroremail").html("The email address provided is invalid");
				styleerror("#erroremail");
				error = 1
				
			}*/
			
			if (error != 1) {
				
				$("#submitButton").animate({
					"width":"250px"
				},800);
				$("#submitButton").val("Submitted successfully");
				
			}
			
			function isValidEmailAddress(emailAddress) {
    		var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
   			return pattern.test(emailAddress);
			};
			
			function styleerror(errortype) {
				$(errortype).css("display", "inline");
				$(errortype).css("border", "none");
				$(errortype).css("backgroundColor", "#CC6666");
				$(errortype).css("width", "280px");
				$(errortype).css("height", "20px");
				$(errortype).css("marginBottom", "10px");
				$(errortype).css("padding", "5px 5px 5px 15px");
			}
			
			function clearerror(errortype) {
				$(errortype).css("display", "none");
				$(errortype).html("");
				$(errortype).css("backgroundColor", "none");
				$(errortype).css("width", "0");
				$(errortype).css("height", "0");
				$(errortype).css("marginBottom", "0");
				$(errortype).css("padding", "0");
			}
			
		});
		
	</script>
<?php

	if($_POST["submit"]) {
	
		echo "<script type=\"text/javascript\">
				clearerror(\"#erroremail\");
				clearerror(\"#errorname\");
				clearerror(\"#errorcomment\");
			</script>";
	
		$error = 0;
		
		$result = '<div class="alert alert-success">Form submitted</div>';
		
		if(!$_POST['name']) {
			echo "<script type=\"text/javascript\">
				$(\"#errorname\").html(\"Please enter a name.\");
				styleerror(\"#errorname\");
				</script>";
				
			$error = 1;
		}
	
		if(!$_POST['email']) {
			echo "<script type=\"text/javascript\">
				(\"#erroremail\").html(\"The email address provided is invalid\");
				styleerror(\"#erroremail\");
				</script>";
				
			$error=1;
		}
		
		if(!$_POST['comment']) {
			echo "<script type=\"text/javascript\">
				$(\"#errorname\").html(\"Please enter a name.\");
				styleerror(\"#errorname\");
				</script>";
			$error = 1;
		}
		
		if($error){
			$result = '<div class="alert alert-danger"><strong>There were error(s) in the form</strong></div>';
		}
	}
?>
	
</body>
</html>