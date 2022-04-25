<?php
	if(isset($_POST['gen'])) {
		if(isset($_POST['passID'])) {
			passGenerator(@$passID)
		}
	}
	
	function passGenerator($length) {
		$result='';
		$ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		while ()
	}
?>

<html>
	<head>
		<style>
			.center{margin-left: auto; margin-right: auto;}
			h1 {text-align: center;}
			h3 {text-align: center;}
			p {text-align: center;}
			form {text-align: center;}
		</style>
	</head>
	<body>
	<br>
	<br>
	<br>
		<h1>Welcome to BallG's Random Password Generator</h1>
		<p>You can create a randomly generated password here and then you can keep it!</p>
		<br>
		<br>
	</body>
	<form>
		<label for="nameID">Input Your Name:</label><br>
		<input type="text" id="nameID" name="nameID"><br><br>
		<label for="emailID">Input Your E-Mail:</label><br>
		<input type="text" id="emailID" name="emailID"><br><br>
		<label for="passID">Input the Length of Your Password:</label><br>
		<input type="text" id="passID" name="passID"><br><br>
	</form>
		<h3>Choose Your Customization</h3>
	<form>
		<table class="center">
			<tr>
				<td><input type="checkbox" id="pass1" name="vehicle1" value="Bike">
				<label for="vehicle1">Contains Special Characters</label></td>
				
				<td><input type="checkbox" id="pass2" name="vehicle2" value="Car">
				<label for="vehicle2">Contains Numbers</label></td>
				
				<td><input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
				<label for="vehicle3">Has capitalized Letters</label></td>
			</tr>
		</table>
	</form>
	<br>
	<form>
		<input type="submit" id="gen" name="gen" value="Generate Your Password">
	<br>
	<br>
	<form>
		<label for="password">Your Random Password:</label><br>
		<input type="text" id="password" name="password"><br><br>
	</form>
	<button style="display:block; margin: 0 auto" type="button"> Download Your Password </button>
</html>