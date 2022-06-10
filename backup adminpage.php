<?php
 if(isset($_GET['generate'])) {
  $passlength=($_GET['passID']);
  $password='';
  if(isset($_GET['passID'])) {
   if(!empty($_GET['pass1']) && !empty($_GET['pass2']) && !empty($_GET['pass3'])) {
    passGeneratorCapNumSpe($passlength);
   }
   else if(!empty($_GET['pass2']) && !empty($_GET['pass3'])) {
    passGeneratorNumSpe($passlength);
   }
   else if(!empty($_GET['pass1']) && !empty($_GET['pass3'])) {
    passGeneratorCapSpe($passlength);
   }
   else if(!empty($_GET['pass1']) && !empty($_GET['pass2'])) {
    passGeneratorCapNum($passlength);
   }
   else if(!empty($_GET['pass3'])) {
    passGeneratorSpe($passlength);
   }
   else if(!empty($_GET['pass2'])) {
    passGeneratorNum($passlength);
   }
   else if(!empty($_GET['pass1'])) {
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
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="javascript.js">
    <link rel="icon" href="img/ballgs3.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/ballgs3.png" height="25px" width="35px">
      <a class="navbar-brand" href="#">BallG's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>


    <div class="p-4 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Welcome to BallG's Random Password Generator </h1>
      <p class="lead">by Bambon Team</p>
      <hr class="my-4">
      <p>You can create a randomly generated password here and then you can keep it!</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
      </p>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="javascript.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <div class="container">
      <div class="row">
        <div class="col">
        <!-- 1 of 3 -->
        </div>
        <div class="col-6">
            <!-- kolom untuk konten -->
          <form action="adminpage.php" method="get">
             <label for="exampleInputEmail1">Input Your Name  : </label>
                <input type="text" name="nameID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
             <label for="exampleInputEmail1">Input Your E-Mail  : </label>
                 <input type="text" name="emailID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
            <label for="customRange2" class="form-label">Password Length  :</label>
            <input type="range" name="passID" class="form-range" min="8" max="64" step="0.5" id="customRange3"> 
               <br><br>
                  <h3>Choose Your Customization</h3>


         <form action="adminpage.php" method="get">
            <div class="row">
              <div class="col"> <!-- kolom1 -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                  <input type="checkbox" name="pass1"  value="Contains Capitalized Characters" aria-label="Checkbox for following text input">  
                        Contains Capitalized 
                </div>
                </div>
                </div>
              </div>
              <div class="col"><!-- kolom2 -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                  <input type="checkbox" name="pass2"  value="Contains Numbers " aria-label="Checkbox for following text input"> 
                   Contains Numbers
                </div>
               
                </div>
                </div>
              </div>
              <div class="col"><!-- kolom1 -->
              <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                  <input type="checkbox" name="pass3"  value="Contains Numbers " aria-label="Checkbox for following text input"> 
                  Contains Special Character
                </div>
                
                </div>
                </div>
              </div>
            </div>

          <br>
         <form action="adminpage.php" method="get">
            <div class="d-grid gap-2">
                <button type="submit" name="generate" class="btn btn-success btn-lg btn-block">Generate Your Password </button>
            </div>
       
         <br>
            Your random password:
            <div class="alert alert-success" role="alert">
              <?php echo(@$password); ?>
            </div>
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-success btn-lg btn-block">Download Password</button> 
            </div>
             </div>
            <div class="col">
               <!-- 3 of 3 -->
            </div>
          </div>
  </body>
</html>
