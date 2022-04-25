<?php
	if(isset($_POST['generate'])) {
		$password='';
		if(isset($_POST['passID'])) {
			$passlength=($_POST['passID']);
			echo $_POST['passID'];
			passGenerator(@$passlength);
		} else {
			passGenerator(12);
		}
	}

	function passGenerator($length) {
		global $password;
		$ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		while (0<$length--) {
			$password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
		}
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
	<form class="" action="" method="post">
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
				<td><input type="checkbox" id="pass1" name="pass1" value="Contains Special Characters">
				<label for="pass1">Contains Special Characters</label></td>
				
				<td><input type="checkbox" id="pass2" name="pass2" value="Contains Numbers">
				<label for="pass2">Contains Numbers</label></td>
				
				<td><input type="checkbox" id="vehicle3" name="pass3" value="Contains Capitalized Letters">
				<label for="pass3">Contains Capitalized Letters</label></td>
			</tr>
		</table>
	</form>
	<br>
	<form class="" action="" method="post">
		<input type="submit" id="generate" name="generate" value="Generate Your Password">
	<br>
	<br>
	<form class="" action="" method="post">
		<label for="password">Your Random Password:</label><br>
		<input type="text" name="password" value="<?php echo(@$password); ?>"><br><br>
	</form>
	<button style="display:block; margin: 0 auto" type="button"> Download Your Password </button>
</html>
