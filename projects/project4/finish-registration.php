<?php

include('./config.php');
session_start();

if(isset($_POST['fin-submit'])){
    $acct = $_POST['acct-type'];
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $license = $_POST['license']; 
    $country = $_POST['country']; 
    $state = $_POST['state']; 
    $zip = $_POST['zip']; 
    $user2 = $_POST['user2']; 
    $email2 = $_POST['email2']; 
    $psw2 = $_POST['psw2'];     
    $psw_repeat2 = $_POST['psw_repeat2'];
    if(!($acct == "") || !($user2 == "") || !($email == "") || !($psw2 == "") || !( $fname == "") || !( $lname == "") 
    || !( $license == "") || !( $country == "") || !( $state == "") || !( $zip == "") || !( $psw_repeat2 == "") || !( $psw2 == $psw_repeat2 )) {
        if ($country == "USA") $country = 1;
        $sql_st = "SELECT id FROM state where name='$state'";
        $result_st = mysqli_query($conn,$sql_st);
        $row_stid = mysqli_fetch_assoc($result_st);
        $state = $row_stid['id'];
        //echo "<script>alert('$user2 $email2 $acct $fname $lname $license $country $state $zip');</script>";
        $sql = "INSERT INTO users (uname, email, password, acct_id, fname, lname, license_num, country_id, state_id, zip) VALUES ('$user2', '$email2', '$psw2', $acct, '$fname', '$lname', $license, $country, $state, $zip)";
        $result = mysqli_query($conn, $sql);
        $sql2 = "SELECT * FROM users WHERE uname='$user2'";
        $result2 = mysqli_query($conn, $sql2);
        if($result2->num_rows > 0) {
            header("location: ./login-signup.php");
        }
        else {
            echo "<script>alert('Registration Error... DB insert was not succesful.');</script>";
        }
    } else {
        echo "<script>alert('Registration form not completed.');</script>";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Complete Registration</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <h1 id="welcome">Welcome to Finish Registration <?php echo $_SESSION['username']; ?>!</h1>
        <div>
            <form action="" method="post" id="fin-page">
                <h1>Sign Up Now</h1>
                <div class="form-container" id="fin-form">
                    <div class="acct-type2">
                        <p id="a-type">Account Type</p>
                        <input type="radio" id="buyer" name="acct-type" value="2">
                        <label for="buyer">Buyer</label>
                        <input type="radio" id="seller" name="acct-type" value="3">
                        <label for="seller">Seller</label>
                    </div>
                    <div class="inputs">
                        <div class="inputs-lc">
                            <label for="fname"><b>First Name</b></label>
                            <input type="text" class="input-field" name="fname" placeholder="First Name" required>

                            <label for="lname"><b>Last Name</b></label>
                            <input type="text" class="input-field" name="lname" placeholder="Last Name" required>

                            <label for="license"><b>License Number</b></label>
                            <input type="text" class="input-field" name="license" placeholder="#License Num" required>

                            <label for="country"><b>Country</b></label>
                            <input type="text" class="input-field" name="country" placeholder="USA" required>

                            <label for="state"><b>State</b></label>
                            <input type="text" class="input-field" name="state" placeholder="State" required>
                        </div>
                        <div class="inputs-rc">
                            <label for="zip"><b>ZIP Code</b></label>
                            <input type="number" class="input-field" name="zip" min="501" placeholder="#ZIP Code" required>

                            <label for="email2"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email2" id="email2" value="<?php echo $_SESSION['email']; ?>" required>

                            <label for="user2"><b>Username</b></label>
                            <input type="text" class="input-field" name="user2" placeholder="User Id" value="<?php echo $_SESSION['username']; ?>" required>

                            <label for="psw2"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw2" id="psw2" value="<?php echo $_SESSION['password']; ?>" required>

                            <label for="psw_repeat2"><b>Confirm Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw_repeat2" id="psw-repeat2" value="<?php echo $_SESSION['password']; ?>" required>
                        </div>                      
                    </div>
                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    <div class="clear2">
                        <button id="regbtn-fin" name="fin-submit" type="submit" class="registerbtn">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>