<?php

	session_start();
	
	include("connection.php");
	
	$query = "SELECT `Diary` FROM `users` WHERE `ID`='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['Diary'];
	
?>

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
		margin-top:80px;
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
	
	#logout {
		height:34px;
		padding-top:6px;;
	}
	
	</style>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
  
  	<div class="navbar navbar-default navbar-fixed-top">
	
		<div class="container">
		
			<div class="navbar-header pull-left">
				
				<a class="navbar-brand">Secret Diary</a>
				
			</div>
			
			<div class="pull-right">
			
				<ul class="navbar-nav nav">
				
					<li><a class="btn btn-default navbar-btn" id = "logout" href="secretdiary.php?logout=1">Log Out</a></li>
				
				</ul>
			
			</div>
		
		</div>
	
	</div>
	
   
	<div class="container contentContainer" id="topContainer">
	
		<div class="row" id="home">
		
			<div class="col-md-6 col-md-offset-3" id="topRow">
			
				<textarea class="form-control"><?php echo $diary; ?></textarea>
			
			</div>
		
		</div>
		 
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
		$(".contentContainer").css("min-height",$(window).height());
		
		$("textarea").css("height",$(window).height() - 110);
		
		$("textarea").keyup(function() {
			
			$.post("autoupdate.php", {diary:$("textarea").val()});
			
		});
	
	</script>
  </body>
</html>