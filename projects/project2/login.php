<?php
  include('./common.php');
  session_start(); /* Starts the session */
  $logins = load_creds();
  global $logins;
  /* Check Login form submitted */
  if(isset($_POST['login'])){
       
    /* Check and assign submitted Username and Password to new variable */
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    
    /* Check Username and Password existence in defined array */
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
      /* Success: Set session variables and redirect to Protected page  */
      $_SESSION['UserData']['Username']= $logins[$Username];
      header("location: ./home.php");
      exit();
    } else {
      /*Unsuccessful attempt: Set error message */
      $msg="<span style='color:red'>Invalid Login Details</span>";
      echo $msg.'<br>';
      }
    }
  if(isset($_POST['signup'])) {
      signUp();
  }
?>

<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="login">
      <?php 
        logo(); 
        navBar(); 
      ?>
      <div id="login-container">
        <form id="login" method="post" action="">
            <h2>Login Form</h2>
            <div class="input-container">
              <input class="input-field" type="text" placeholder="Username" name="Username">
            </div>
            
            <div class="input-container">
              <input class="input-field" type="password" placeholder="Password" name="Password">
            </div>
          
            <button name="login" type="submit" class="btn">Login</button>
            <hr>
            <button name="signup" type="submit" class="btn">Sign Up</button>
        </form>
      </div>
    </body>
</html>