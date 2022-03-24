<?php
    include('./common.php');
    session_start();
    $logins = load_creds();
    if(isset($_POST['signup'])) {
        $username = isset($_POST['Username']) ? $_POST['Username'] : '';
        $password = isset($_POST['Password']) ? $_POST['Password'] : '';
        $error_found = false;
        if(isset($logins[$username])){
          $msg="<span style='color:red'>Username already exists please try again</span>";
          echo $msg;
          $error_found = true;
        } 
        if(($username == '' || $password == '') && ($error_found == false)){
          $msg="<span style='color:red'>Username or Password was not filled correctly please try again</span>";
          $error_found = true;
          echo $msg;
        }
        if( ($error_found == false) && ($username != '') && ($password != '')){
          add_user($username, $password);
          redirect_login();
          echo "Registration Succesful!";
        }
    }
?>

<html>
    <head>
        <title>Sign Up Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body class="sign-up">
      <?php 
        logo();
        navBar();
      ?>
      <form id="sign-up" method="post" action="">
          <h2>Sign Up Form</h2>
          <div class="input-container">
            <input class="input-field" type="text" placeholder="Username" name="Username">
          </div>
        
          <!--<div class="input-container">
            <input class="input-field" type="text" placeholder="Email" name="Email">
          </div>-->
          
          <div class="input-container">
            <input class="input-field" type="password" placeholder="Password" name="Password">
          </div>
        
          <button name="signup" type="submit" class="btn">Sign Up</button>
        </form>
    </body>
</html>