<?php

include('./config.php');
error_reporting(0);

session_start();

if(isset($_POST['login-submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass']; 

    $sql = "SELECT * FROM users WHERE uname='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $sql = "SELECT acct_id FROM users WHERE uname='$username' AND PASSWORD='$password'";
    $acct_id = mysqli_query($conn,$sql); 
    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($acct_id);
        $_SESSION['username'] = $row['username'];
        $_SESSION['acct_id'] = $row2['acct_id']; 
        if( $_SESSION['acct_id'] == 3) {
            header("location:./seller_portal.php");   
        }
        if( $_SESSION['acct_id'] == 2) {
            header("location:./buyer_portal.php");   
        }
    } else {
        echo "<script>alert('Woops! Username or Password is Wrong.');</script>";
    }
}

if(isset($_POST['reg-submit'])) {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    //$chk_pass = $_POST['cpass'];
    if(!($username == "") || !($email == "") || !($password == "")) {
        $sql = "SELECT * FROM users WHERE uname='$username' AND password='$password' AND email='$email'";
        $result = mysqli_query($conn,$sql);
        if(!($result->num_rows > 0)) {
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:./finish-registration.php");
        }
        if($result->num_rows > 0) {
            echo "<script>alert('Woops! Username or Email is already taken.');</script>";
        }
    } else {
        echo "<script>alert('Please complete sign up form.');</script>";
    }

}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login And Sign Up Form</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="btn-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="logForm()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="regForm()">Sign Up</button>
                </div>
                <div class="logo" id="lr-page">
                    <a href="./landing-page.html" class="logo-black"><img class="logo-black" src="./assets/logos/mp_black_small.png" alt="logo"></a>
                </div>
                <form action="" method="post" id="login-page" class="input-group">
                    <input type="text" class="input-field" name="user" placeholder="User Id" required>
                    <input type="password" class="input-field" name="pass" placeholder="Enter Password" required>
                    <input type="checkbox" class="checkbox"><span>Remember Password</span>
                    <button name="login-submit" class="submit-btn">Log in</button>
                </form>
                <form action="" method="post" id="register-page" class="input-group">
                    <input type="text" class="input-field" name="user" placeholder="User Id" required>
                    <input type="email" class="input-field" name="email" placeholder="Email Id" required>
                    <input type="password" class="input-field" name="pass" placeholder="Enter Password" required>
                    <input type="checkbox" class="checkbox"><span>Remember Password</span>
                    <button name="reg-submit" class="submit-btn">Sign Up</button>
                </form>
            </div>
        </div>
    </body>
    <script>
        var log = document.getElementById("login-page");
        var reg = document.getElementById("register-page");
        var btn = document.getElementById("btn");

        function regForm() {
            log.style.left = "-400px";
            reg.style.left = "50px";
            btn.style.left = "110px";
        }

        function logForm() {
            log.style.left = "50px";
            reg.style.left = "450px";
            btn.style.left = "0px";
        }
    </script>
</html>