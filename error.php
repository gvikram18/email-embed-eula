<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email verified</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.5/css/fork-awesome.min.css" integrity="sha256-P64qV9gULPHiZTdrS1nM59toStkgjM0dsf5mK/UwBV4=" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script>
		var myVar;

		function myFunction() {
    		myVar = setTimeout(showPage, 2000);
		}

		function showPage() {
  			document.getElementById("loader").style.display = "none";
  			document.getElementById("myDiv").style.display = "block";
		}
	</script>

	<style>
	/* Center the loader */
	#loader {
  		position: absolute;
  		left: 50%;
  		top: 50%;
  		z-index: 1;
  		width: 150px;
  		height: 150px;
  		margin: -75px 0 0 -75px;
  		border: 16px solid #f3f3f3;
  		border-radius: 50%;
  		border-top: 16px solid #8ecd4e;
  		border-bottom: 16px solid #054978;
  		width: 120px;
  		height: 120px;
  		-webkit-animation: spin 2s linear infinite;
  		animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
  		0% { -webkit-transform: rotate(0deg); }
  		100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
  		0% { transform: rotate(0deg); }
  		100% { transform: rotate(360deg); }
	}

/* Add animation to "page content" */
	.animate-bottom {
  		position: relative;
  		-webkit-animation-name: animatebottom;
  		-webkit-animation-duration: 1s;
  		animation-name: animatebottom;
  		animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
  		from { bottom:-100px; opacity:0 } 
  		to { bottom:0px; opacity:1 }
		}

	@keyframes animatebottom { 
  		from{ bottom:-100px; opacity:0 } 
  		to{ bottom:0; opacity:1 }
	}

	#myDiv {
  		display: none;
  		text-align: center;
	}
	</style>
</head>

<body onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
	<div style="display:none;" id="myDiv" class="animate-bottom">
		<div class="jumbotron text-xs-center" style="background: none; background-color: #f9f9f9;margin-bottom: 0;min-height: 50%;
    background-repeat: no-repeat;background-position: center;-webkit-background-size: cover;background-size: cover;
    padding: 0 2rem 4rem 4rem;">
  		<h1 class="display-3" style="text-align: center;color: #fc0505;">Error establishing database connection for verification!</h1>
  		<hr><br><br>
  		<h4 class="lead" style="text-align: center; color: #054978;"><strong>Please Contact</strong> <a href="mailto:support@ivtree.com" target="_top" style="color: #054978;"> support@ivtree.com</a> for further action.</h4>
  		<h3 class="display-5" style="text-align: center; color: #054978;"><strong>Close this page.</strong></h3><br>
		</div>
		<div style="margin-top:30px;text-align:center;">
			<br><br>
			<hr>
			<a href="#" target="_blank"><img src="https://ivtree.com/wp-content/uploads/2017/04/fb-cover-7913-58d95c2f59692.jpg" alt="IVTREE" width="200"></a><br><br>
			<p style="margin:0;color:#294661;font-family:'Open Sans','Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif;font-weight:300;font-size:12px;margin-bottom:5px">© IVTREE IT Solutions.</p><p style="margin:0;color:#294661;font-family:'Open Sans','Helvetica Neue','Helvetica',Helvetica,Arial,sans-serif;font-weight:300;font-size:12px;margin-bottom:5px">ThinkHub, 100-103 Export Promotion Industrial Park, Whitefield, Bengaluru, Karnataka 560066</p>

			<!--<a href="https://in.linkedin.com/company/ivtree" target="_blank"><i class="fa fa-linkedin-square fa-stack-2x" aria-hidden="true"></i></a>-->
		</div>
	</div>

</body>
</html>