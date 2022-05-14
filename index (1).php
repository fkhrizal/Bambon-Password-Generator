<?php
 if(isset($_GET['generate'])) {
  $passlength=($_GET['passID']);
  $password='';
  if(isset($_GET['passID'])) {
   if(isset($_GET['pass1'])) {
    passGeneratorCap(@$passlength);
   } else if(isset($_GET['pass2'])) {
    passGeneratorNum(@$passlength);
   } else if(isset($_GET['pass3'])) {
    passGeneratorSpe(@$passlength);
   } else if(isset($_GET['pass1']) && isset($_GET['pass2'])) {
    passGeneratorCapNum(@$passlength);
   } else if(isset($_GET['pass1']) && isset($_GET['pass3'])) {
    passGeneratorCapSpe(@$passlength);
   } else if(isset($_GET['pass2']) && isset($_GET['pass3'])) {
    passGeneratorNumSpe(@$passlength);
   } else if(isset($_GET['pass1']) && isset($_GET['pass2']) && isset($_GET['pass3'])) {
    passGeneratorCapNumSpe(@$passlength);
   } else {
    passGeneratorDef(@$passlength);
   }
  }
  else {
   passGeneratorDef(0);
  }
 }

 function passGeneratorDef($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyz';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorCap($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorNum($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyz1234567890';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorSpe($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyz~`!@#$%^&*()-_=+{}[]|\";:/?.>,<';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorCapNum($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorCapSpe($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~`!@#$%^&*()-_=+{}[]|\";:/?.>,<';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorNumSpe($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyz1234567890~`!@#$%^&*()-_=+{}[]|\";:/?.>,<';
  while (0<$length--) {
   $password.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
  }
 }
 function passGeneratorCapNumSpe($length) {
  global $password;
  $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890~`!@#$%^&*()-_=+{}[]|\";:/?.>,<';
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
  <input type="number" name="passID" value="0" min="0" max="24"> <br><br>

  <h3>Choose Your Customization</h3>

 <form action="index.php" method="get">
  <table class="center">
   <tr>
    <td><input type="checkbox" name="pass1">
    Contains Capitalized Characters</td>

    <td><input type="checkbox" name="pass2">
    Contains Numbers</td>

    <td><input type="checkbox" name="pass3">
    Contains Special Characters</td>
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
