<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Login or Sign Up page</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text.css'/>
		<!--//webfonts-->
</head>
<body>
	<div class="main">
		<div class="header" >
			<h1>BRICK FIELD</h1>
			<p>Log In or Sign Up Form for Employee</p>
		</div>
			<form action="insert_employee_seller.php" method="post" id="insertForm">
				<ul class="left-form">
					<h2>Insert New Employee Account:</h2>
					<li>
						<input type="text"   placeholder="First Name" name="fn" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Last Name" name="ln" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Username" name="username" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="text"   placeholder="Employee Level" name="level" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="password" name="pass" required/>
						<div class="clear"> </div>
					</li> 
					<li>
						<input type="password"   placeholder="Confirm Password" name="conpass" required/>
						<div class="clear"> </div>
					</li>
						<p><input type="submit" name="submit" id="Sign_Up" value="Sign Up"></p>
				</ul>
			</form>
			</div>
				<!-----//end-copyright---->

	
</body>
</html>