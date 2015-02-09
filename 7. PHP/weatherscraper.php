<!doctype html>
<html>
<head>
    <title>Weather Scraper</title>

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
	
	#initContainer {
		background-image:url("images/weather.jpg");
		width:100%;
		background-size:cover;
		background-position:center;
	}
	
	#initRow {
		margin-top:120px;
		text-align:center;
	}
	
	#initRow h1 {
		font-size:300%;
	}
	
	.marginTop {
		margin-top:30px;
	}
	
	#locationIcon {
		font-size:150%
	}
	
	.paddingTop {
		padding-top:40px;
	}
	
	#swap {
		font-size:150%;
	}
	
	#output {
		display:none;
	}
	
	#outputfail {
		display:none;
	}
	
	#cityfail {
		display:none;
	}
	
	</style>
	
</head>
<body>

	<div class="container contentContainer" id="initContainer">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3" id="initRow">
			
				<h1>What is the weather today?</h1>
				
				<p class="lead paddingTop">This is a simple web application that displays the weather in your location.</p>
				
				<p class="bold marginTop" id="swap">Enter your location to try it out!</p>
				
				<form class="marginTop">
				
					<div class="input-group">
						<span class="glyphicon-cloud input-group-addon" aria-hidden="true" id="locationIcon"></span>
						
						<input type="text" class="form-control" placeholder="Enter your location... eg: London, Tokyo, Chicago" id="city"/>
						
					</div>
						
						<input type="submit" class="btn btn-success btn-lg marginTop" value="Find My Weather" id="findweather"/>
				
				</form>
				
				<div class="alert alert-success marginTop" id="output"></div>
				<div class="alert alert-danger marginTop" id="outputfail">Could not find weather data for that city. Please try again.</div>
				<div class="alert alert-danger marginTop" id="cityfail">Please enter a city.</div>
			
			</div>
		
		</div>
	
	</div>
	
	
	<script>
	
		$(".contentContainer").css("min-height",$(window).height());
		
		$("#findweather").click(function(event) {
		
			$(".alert").hide();
		
			event.preventDefault();
			
			var city = $("#city").val();
			
			if (city == "") {
			
				$("#swap").html("Please enter a city below:");
				$("#swap").css("color", "red");
				$("#cityfail").fadeIn();
				
			} else {
				$.get("scraper.php?city="+$("#city").val(), function(data) {
				
				if (data=="") {
					
					$("#swap").html("Please try again:");
					$("#swap").css("color", "red");
					
					$("#outputfail").fadeIn();
				} else {
					$("#swap").html("Success! Enter a different city:");
					$("#swap").css("color", "#459B45");		
			
					$("#output").html(data).fadeIn();
				
					}
				
				});
				
			}
			
		});
	
	</script>
</body>
</html>