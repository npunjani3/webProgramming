<?php
    include('./common.php');
    session_start(); /* Starts the session */
    $logins = load_creds();
    global $logins;
    if(!isset($_SESSION['UserData']['Username'])){
        die(header("location: ./login.php"));
    }
    $cookie_names = ['q1-answers','q2-answers','q3-answers','q4-answers','q5-answers','q6-answers','q7-answers','q8-answers','q9-answers','q10-answers','q11-answers','q12-answers'];
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['quiz'])){
        if(!isset($_POST[$cookie_names[0]])||!isset($_POST[$cookie_names[1]])||!isset($_POST[$cookie_names[2]])||!isset($_POST[$cookie_names[3]])||!isset($_POST[$cookie_names[4]])||!isset($_POST[$cookie_names[5]])||
        !isset($_POST[$cookie_names[6]])||!isset($_POST[$cookie_names[7]])||!isset($_POST[$cookie_names[8]])||!isset($_POST[$cookie_names[9]])||!isset($_POST[$cookie_names[10]])||!isset($_POST[$cookie_names[11]])) {
            if(isset($_POST[$cookie_names[0]])) { setcookie($cookie_names[0], $_POST[$cookie_names[0]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[1]])) { setcookie($cookie_names[1], $_POST[$cookie_names[1]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[2]])) { setcookie($cookie_names[2], $_POST[$cookie_names[2]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[3]])) { setcookie($cookie_names[3], $_POST[$cookie_names[3]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[4]])) { setcookie($cookie_names[4], $_POST[$cookie_names[4]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[5]])) { setcookie($cookie_names[5], $_POST[$cookie_names[5]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[6]])) { setcookie($cookie_names[6], $_POST[$cookie_names[6]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[7]])) { setcookie($cookie_names[7], $_POST[$cookie_names[7]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[8]])) { setcookie($cookie_names[8], $_POST[$cookie_names[8]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[9]])) { setcookie($cookie_names[9], $_POST[$cookie_names[9]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[10]])) { setcookie($cookie_names[10], $_POST[$cookie_names[10]], time() + (3600), "/"); }
            if(isset($_POST[$cookie_names[11]])) { setcookie($cookie_names[11], $_POST[$cookie_names[11]], time() + (3600), "/"); }
            $msg="<span style='color:red'>Please Complete All Questions</span>";
            echo $msg;
            header("refresh:2;url=./quiz.php");
            exit;
        }
        if(isset($_POST[$cookie_names[0]])&&isset($_POST[$cookie_names[1]])&&isset($_POST[$cookie_names[2]])&&isset($_POST[$cookie_names[3]])&&isset($_POST[$cookie_names[4]])&&isset($_POST[$cookie_names[5]])&&
        isset($_POST[$cookie_names[6]])&&isset($_POST[$cookie_names[7]])&&isset($_POST[$cookie_names[8]])&&isset($_POST[$cookie_names[9]])&&isset($_POST[$cookie_names[10]])&&isset($_POST[$cookie_names[11]])) {

            $_SESSION[$cookie_names[0]] = $_POST[$cookie_names[0]];
            $_SESSION[$cookie_names[1]] = $_POST[$cookie_names[1]];
            $_SESSION[$cookie_names[2]] = $_POST[$cookie_names[2]];
            $_SESSION[$cookie_names[3]] = $_POST[$cookie_names[3]];
            $_SESSION[$cookie_names[4]] = $_POST[$cookie_names[4]];
            $_SESSION[$cookie_names[5]] = $_POST[$cookie_names[5]];
            $_SESSION[$cookie_names[6]] = $_POST[$cookie_names[6]];
            $_SESSION[$cookie_names[7]] = $_POST[$cookie_names[7]];
            $_SESSION[$cookie_names[8]] = $_POST[$cookie_names[8]];
            $_SESSION[$cookie_names[9]] = $_POST[$cookie_names[9]];
            $_SESSION[$cookie_names[10]] = $_POST[$cookie_names[10]];
            $_SESSION[$cookie_names[11]] = $_POST[$cookie_names[11]];

            $answers =[$_SESSION[$cookie_names[0]],$_SESSION[$cookie_names[1]],$_SESSION[$cookie_names[2]],$_SESSION[$cookie_names[3]],$_SESSION[$cookie_names[4]],$_SESSION[$cookie_names[5]],$_SESSION[$cookie_names[6]],$_SESSION[$cookie_names[7]],$_SESSION[$cookie_names[8]],$_SESSION[$cookie_names[9]],$_SESSION[$cookie_names[10]],$_SESSION[$cookie_names[11]]];
            $result = get_results($answers);
            $_SESSION['quiz-result'] = $result;
            $pic = get_pic($result);
            $descriptions = get_description($result);
            $name = get_name($result);
            $user = array_search($_SESSION['UserData']['Username'], $logins);
            $quiz = $_SESSION['quiz_name'];
            $date = time();
        }
    }
?>

<html>
    <head>
        <title>Your Results</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            logo(); 
            navBar(); 
        ?>
        <div id="results-container">
            <form method="post" action="./home.php">
            <div>
                <h1> Thanks for participating <?= array_search($_SESSION['UserData']['Username'], $logins); ?>! Here is your</h1> 
                <h1><?php echo $_SESSION['quiz_name']; ?> Results!</h1>
            </div>
            <br>
            <div id="results-inner-container">
                <div>
                    <img class="result" <?php if($pic != false) echo 'src='.$pic.''; ?> alt="result-pic">
                </div>
                <div id="description">
                    <h2><?php if($name != false) echo $name;?></h2>
                    <p><strong>Description:</strong><br><?php if($descriptions != false) echo $descriptions; ?></p>
                </div>
            </div>
            <div id="buttons">
                <button class="btn" type="submit" value="save" id="left-btn" name="save">Save Result</button>
                <button class="btn" type="submit" value="cancel"id="right-btn" name="cancel">Cancel</button>
            </div>
            </form>
        </div>
    </body>
</html>