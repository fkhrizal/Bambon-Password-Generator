

<?php

session_start();

 if(isset($_POST['generate'])) {
  $passlength=($_POST['passID']);
  $password='';
  if(isset($_POST['passID'])) {
   if(!empty($_POST['pass1']) && !empty($_POST['pass2']) && !empty($_POST['pass3'])) {
    passGeneratorCapNumSpe($passlength);
   }
   else if(!empty($_POST['pass2']) && !empty($_POST['pass3'])) {
    passGeneratorNumSpe($passlength);
   }
   else if(!empty($_POST['pass1']) && !empty($_POST['pass3'])) {
    passGeneratorCapSpe($passlength);
   }
   else if(!empty($_POST['pass1']) && !empty($_POST['pass2'])) {
    passGeneratorCapNum($passlength);
   }
   else if(!empty($_POST['pass3'])) {
    passGeneratorSpe($passlength);
   }
   else if(!empty($_POST['pass2'])) {
    passGeneratorNum($passlength);
   }
   else if(!empty($_POST['pass1'])) {
    passGeneratorCap($passlength);
   }
   else {
    passGeneratorDef($passlength);
   }
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

<?php
 if(isset($_POST['save'])) {
  require('db.php');
  if(isset($_POST['passname'])) {
   $username=stripslashes($_SESSION['username']);
   $username=mysqli_real_escape_string($con, $username);
   $passname=stripslashes($_REQUEST['passname']);
   $passname=mysqli_real_escape_string($con, $passname);
   $generate=stripslashes($_REQUEST['generated']);
   $generate=mysqli_real_escape_string($con, $generate);
   $query= "INSERT INTO `data` (username, password_name, generated_password) VALUES ('$username', '$passname', '$generate')";
   $result=mysqli_query($con, $query);
   if ($result) {
    echo "Your Data Has Been Saved";
   } else {
    echo "Failed to save your data";
   }
  }
 }
?>

<?php
  require('db.php');
  $username=stripslashes($_SESSION['username']);
  $username=mysqli_real_escape_string($con, $username);
  echo "Hello $username";
  $query= "SELECT * FROM `data` WHERE `data`.`username` = '$username'";
  $result=mysqli_query($con, $query);
  if ($result) {
   echo "<div class=row>
  	     <div class=column>
    	 <table>
   	      <tr>
   	       <th>Password Name</th>
   	       <th>Generated Password</th>
   	      </tr>";
   while($row = $result->fetch_assoc()) {
    echo "<tr><td style=text-align:center>".$row["password_name"].
   		 "</td><td style=text-align:center>".$row["generated_password"].
   		 "</td></tr>";
   }
   	echo "</table>
   	</div>";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="icon" href="img/ballgs3.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
<title>Ballg's Password Generator</title>
  <body class="bg-light">
     <header class="p-3 bg-success text-white">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	 <script type="text/javascript" src="ajax-script.js"></script>
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-light text-white bg-success" placeholder="Search..." aria-label="Search">
        </form>

      </div>
    </div>
  </header>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/ballgs3.png" alt="" width="72" height="57">
      <h2>Welcome to BallG's Random Password Generator</h2>
      <p class="lead">You can create a randomly generated password here and then you can keep it!</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-1">
          <span class="text-primary">Hello, $username! </span>
          <img src="img/avatar.png">
        </h4>
         <hr class="my-1">
         <br>
         <h5 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your Password : </span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h5>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Instagram1</h6>
              <small class="text-muted">sIDsa039#$</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Google Account 1</h6>
              <small class="text-muted">Ad@#mLouE3#</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Google Account2</h6>
              <small class="text-muted">U8s&*sgLK3</small>
            </div>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search my password">
            <button type="submit" class="btn btn-secondary">Search</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Create Password</h4>
        <form action="adminpage.php" METHOD="POST">
          <div class="row g-3">


            <div class="col-12">
              <label for="Text" class="form-label">Password Name <span class="text-muted"></span></label>
              <input type="Text" name="passname" class="form-control" id="passname" placeholder="name your password here">
            </div>

            <div class="col-12">
            <label for="address" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="password description" rows="3"></textarea>
            </div>

            <input type="range" name="passID" class="form-range" min="8" max="32" id="myRange" value="8">
              <p>Password Length: <span id="demo"></span></p>
            <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value;

            slider.oninput = function() {
              output.innerHTML = this.value;
            }
            </script>

          <hr class="my-4">

           <form action="generatepassword.php" METHOD="POST">
           <div class="form-check">
            <input type="checkbox" name="pass1" class="form-check-input" id="same-address">
            <label class="form-check-label"  for="same-address">Contains Capitalized( e.g. ABCDEFGH ) </label>
          </div>

          <div class="form-check">
            <input type="checkbox" name="pass2" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Contains Numbers( e.g. 123456 )</label>
          </div>

           <div class="form-check">
            <input type="checkbox" name="pass3" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Contains Special Character ( e.g. @#$% )</label>
          </div>
         

          <hr class="my-4">
            <form action="generatepassword.php" METHOD="POST">
            <div class="d-grid gap-2">
                <button type="submit" name="generate" id="generate" class="btn btn-success btn-lg btn-block">Generate Your Password</button>
            </div>
			<br>
			<div class="d-grid gap-2">
                <button type="submit" name="save" id="save" class="btn btn-success btn-lg btn-block">Save to Database</button>
            </div>
             Your random password:
            <div class="alert alert-success" role="alert">
             <h4 class="d-flex justify-content-between align-items-center mb-1">
              <input type="Text" name="generated" class="form-control" id="generated" value="<?php echo(@$password); ?>">
             </h4>
            </div>
            <div class="d-grid gap-3 d-md-block" align="center">
                      <button type="button" class="btn btn-primary btn-lg btn-block" style="width:300px; height: 50px;">Download Password</button> 
                      <button type="button" class="btn btn-primary btn-lg btn-block" style="width:300px; height:50px; ">Send To My Email </button>      
            </div>

          <hr class="my-4">
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Bambon.Inc</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
