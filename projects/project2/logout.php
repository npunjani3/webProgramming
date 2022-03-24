<?php
    include('./common.php');
    $cookie_names = ['q1-answers','q2-answers','q3-answers','q4-answers','q5-answers','q6-answers','q7-answers','q8-answers','q9-answers','q10-answers','q11-answers','q12-answers'];
    setcookie($cookie_names[0], NULL, time() - 3600, "/");
    setcookie($cookie_names[1], NULL, time() - 3600, "/");
    setcookie($cookie_names[2], NULL, time() - 3600, "/");
    setcookie($cookie_names[3], NULL, time() - 3600, "/");
    setcookie($cookie_names[4], NULL, time() - 3600, "/");
    setcookie($cookie_names[5], NULL, time() - 3600, "/");
    setcookie($cookie_names[6], NULL, time() - 3600, "/");
    setcookie($cookie_names[7], NULL, time() - 3600, "/");
    setcookie($cookie_names[8], NULL, time() - 3600, "/");
    setcookie($cookie_names[9], NULL, time() - 3600, "/");
    setcookie($cookie_names[10], NULL, time() - 3600, "/");
    setcookie($cookie_names[11], NULL, time() - 3600, "/");
    session_start();
    session_unset();
    session_destroy();
    header("refresh:5; url= ./login.php");
    //exit;
?>

<html>
    <head>
        <title>Logout Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            logo(); 
            navBar(); 
        ?>
        <div id="logout-message">
            <h1>Logged Out</h1>
            <p>Thank you for using</p>
            <p>Page is redirecting to <span><strong>Login</strong></span> in 5s...</p>
        </div>
    </body>
</html>