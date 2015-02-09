<? include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary</title>
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
	
	h1 {
		margin-top:65px;
	}
	
	#loginDiv {
		margin-top:7px;
	}
	
	#loginError {
		padding-top:7px;
		height:35px;
		margin:0 0 5px 0;
	}
	
	.navbar-brand {
		font-size:1.8em;
	}
	
	#topContainer {
		background-image:url("images/StockPhoto.jpg");
		width:100%;
		background-size:cover;
	}
	
	#topRow {
		margin-top:100px;
		text-align:center;
	}
	
	#topRow h1 {
		font-size:300%;
	}
	
	#emailSignup {
		margin-top:15px;
	}
	
	.bold {
		font-weight:bold;
	}
	
	.marginTop {
		margin-top:30px;
	}
	
	.marginTopSmall {
		margin-top:15px;
	}
	
	.center {
		text-align:center;
	}
	
	.title {
		margin-top:100px;
		font-size:300%
	}
	
	#footer {
		background-color:#B0D1FB;
		padding-top:70px;
	}
	
	.marginBottom {
		margin-bottom:30px;
	}
	
	.contentContainer {
		width:100%;
	}
	
	.appstoreimage {
		width:250px;
	}
	
	</style>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
  
  	<div class="navbar navbar-default navbar-fixed-top">
	
		<div class="container">
		
			<div class="navbar-header">
				
				<a href="secretdiary.php" class="navbar-brand">Secret Diary</a>
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				
        			<span class="sr-only">Toggle navigation</span>
					
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
					
      			</button>
				
			</div>
			
			<div class="collapse navbar-collapse">
			
				<form class="navbar-form navbar-right" method="post">
				
					<div class="form-group">
						<input type="email" name="LIemail" id="LIemail" class="form-control" placeholder="Email" value="<?php echo addslashes($_POST['LIemail']); ?>"/>
					</div>
					
					<div class="form-group">
						<input type="password" name="LIpassword" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['LIpassword']); ?>"/>
					</div>
					
					<div class="form-group">
						<input type="submit" name ="submit" class="btn btn-success" value="Log In" />
					</div>
				
				</form>
				
				<div class="navbar-right" id="loginDiv">
					<?php if($LIerror) echo '<div class="alert alert-danger" id="loginError">'.addslashes($LIerror).'</div>'; ?>	
					<?php if($logoutmessage) echo '<div class="alert alert-danger" id="loginError">'.addslashes($logoutmessage).'</div>'; ?>
				</div>
			
			</div>
		
		</div>
	
	</div>
	
   
	<div class="container contentContainer" id="topContainer">
	
		<div class="row" id="home">
		
			<div class="col-md-6 col-md-offset-3" id="topRow">
			
				<h1>Secret Diary</h1>
				
				<p class="lead">Your very own private diary, with you wherever you go.</p>
				
				<p class="bold marginTop">Interested? Sign Up Below!</p>
				
				<?php if($error) echo '<div class="alert alert-danger">'.addslashes($error).'</div>'; ?>
				
				<form class="marginTop" method="post">
				
					<div class="input-group">
						<span class="input-group-addon">@</span>
						
						<input type="email" name="email" id="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>"/>
						
					</div>
					
					<div class="input-group marginTopSmall">
					
						<span class="input-group-addon glyphicon glyphicon-asterisk" aria-hidden="true"></span>
												
						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>"/>
						
					</div>
						
						<input type="submit" name="submit" id="submitButton" class="btn btn-success btn-lg marginTop" value = "Sign Up"/>
				
				</form>
			
			</div>
		
		</div>
		 
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
		$(".contentContainer").css("min-height",$(window).height());
	
	</script>
  </body>
</html>