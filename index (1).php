<?php
 if(isset($_GET['generate'])) {
  $password='';
  if(isset($_GET['passID'])) {
   $passlength=($_GET['passID']);
   passGenerator(@$passlength);
  } else {
   passGenerator(0);
  }
 } else {
  passGenerator(0);
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
  <br><br><br>
  <h1>Welcome to BallG's Random Password Generator</h1>
  <p>You can create a randomly generated password here and then you can keep it!</p>
  <br><br>

 <form action="index.php" method="get">
  Input Your Name: <br>
  <input type="text" name="nameID"> <br><br>
  Input Your E-Mail: <br>
  <input type="email" name="emailID"> <br><br>
  Password Length: <br>
  <input type="number" name="passID" value="0"> <br><br>

  <h3>Choose Your Customization</h3>

 <form>
  <table class="center">
   <tr>
    <td><input type="checkbox" name="pass1">
    Contains Special Characters</td>

    <td><input type="checkbox" name="pass2">
    Contains Numbers</td>

    <td><input type="checkbox" name="pass3">
    Contains Capitalized Letters</td>
   </tr>
  </table>

  <br>
 <form action="index.php" method="get">
  <input type="submit" name="generate" value="Generate Your Password">
  <br><br>

 <form action="index.php" method="post">
  Your Random Password: <br>
  <input type="text" name="password" value="<?php echo(@$password); ?>"> <br><br>

  <button style="display:block; margin: 0 auto" type="button"> Download Your Password </button>

 </body>
</html>
