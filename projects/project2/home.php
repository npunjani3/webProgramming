<?php
    include('./common.php');
    session_start(); /* Starts the session */
    $logins = load_creds();
    global $logins;
    if(!isset($_SESSION['UserData']['Username'])){
        die(header("location: ./login.php"));
    }
    if(isset($_POST['save'])){
        $pic = get_pic($_SESSION['quiz-result']);
        $descriptions = get_description($_SESSION['quiz-result']);
        $name = get_name($_SESSION['quiz-result']);
        $user = array_search($_SESSION['UserData']['Username'], $logins);
        $quiz = $_SESSION['quiz_name'];
        $date = date('Y-m-d H:i:s');
        save_result($user, $quiz, $date, $pic, $name, $descriptions);
        unset($_POST['save']);
    }
?>

<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            logo(); 
            navBar(); 
        ?>
        <h1>Welcome to Personality Check, <?= array_search($_SESSION['UserData']['Username'], $logins); ?> </h1>
    </body>
</html>