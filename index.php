
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pre-School</title>
		<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Donuts Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
		<script>
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
	</script>
		<!-- Meta tags -->
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
		<!--stylesheets-->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
			<!--//style sheet end here-->
			<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
				<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				</head>
				<body>
					<div class="mid-cls">
						<h2 class="header-w3ls"><br><br><br>
						.</h2>
						<div class="swm-right-w3ls">
							<form action="#" method="POST">
								<div class=" header-side" >
									
									
								</div>
								<div class="main">
<?php

if (isset($_POST['submit']))  
{
	$user = $_POST['username'];
	$psdd = $_POST['password'];
	if($user == "morgat" && $psdd=="1234")
	{
		header("location:dashboard.php");
	}
	else
	{		echo'<font color="red"><p style="text-align:center;"><b>Please Check Username & Password <b></p></font>';
		
	}
}
?>

									<div class="icon-head">
										<h2>Login Here</h2>
									</div>
									<div class="form-left-w3l">
										<input type="text" name="username" placeholder="username" required="">
											<div class="clear"></div>
										</div>
										<div class="form-right-w3ls ">
											<input type="password" name="password" placeholder="Password" required="">
												<div class="clear"></div>
											</div>
											 <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div><br>
											<div class="btnn">
												<button type="submit" name="submit">Login</button>
												<br>

													<a href="registration.php" class="for">Create New Account</a>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="copy">
									<p>&copy;2019 All Rights Reserved | Design by :
								<a href="#" target="_blank">Morgat Softwares Pvt Ltd.</a>
									</p>
								</div>
							</body>
						</html>