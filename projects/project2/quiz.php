<?php
    include('./common.php');
    session_start(); /* Starts the session */
    $logins = load_creds();
    global $logins;
    if(!isset($_SESSION['UserData']['Username'])){
        die(header("location: ./login.php"));
    }
    $questions = load_questions();
    $_SESSION['quiz_name'] = $questions[0];
    $answers = load_answers();
    $cookie_names = ['q1-answers','q2-answers','q3-answers','q4-answers','q5-answers','q6-answers','q7-answers','q8-answers','q9-answers','q10-answers','q11-answers','q12-answers'];
    $i = 0;
    global $i;
    $j = 0;
    global $j;
?>

<html>
    <head>
        <title>Quiz</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"  type="text/css" href="./style.css">
    </head>
    <body>
        <?php
            logo();
            navBar();
        ?>
        
        <form id="quiz" action="./display_result.php" method="post" >
            <h1 id="quiz-name"><?php echo $questions[$i++]; ?></h1>
            <div class="question">
                <h3>Question 1:
                    <br><br>
                    <?php
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q1-answers" id="q1-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[0]]) && $_COOKIE[$cookie_names[0]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q1-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 2:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];} 
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q2-answers" id="q2-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[1]]) && $_COOKIE[$cookie_names[1]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q2-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 3:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q3-answers" id="q3-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[2]]) && $_COOKIE[$cookie_names[2]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q3-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 4:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q4-answers" id="q4-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[3]]) && $_COOKIE[$cookie_names[3]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q4-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 5:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q5-answers" id="q5-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[4]]) && $_COOKIE[$cookie_names[4]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q5-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 6:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];} 
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q6-answers" id="q6-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[5]]) && $_COOKIE[$cookie_names[5]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q6-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 7:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q7-answers" id="q7-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[6]]) && $_COOKIE[$cookie_names[6]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q7-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 8:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q8-answers" id="q8-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[7]]) && $_COOKIE[$cookie_names[7]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q8-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 9
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q9-answers" id="q9-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[8]]) && $_COOKIE[$cookie_names[8]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q9-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 10
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q10-answers" id="q10-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[9]]) && $_COOKIE[$cookie_names[9]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q10-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 11:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-d" class="labeld"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?></label>
                </div>
                <div class="answer">
                    <input type="radio" name="q11-answers" id="q11-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[10]]) && $_COOKIE[$cookie_names[10]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q11-answers-f" class="labelf"> <?php if(count($answers)>0) {echo $answers[$j++];}?></label>
                </div>
                <hr class="question">
            </div>
            <div class="question">
                <h3>Question 12:
                    <br><br>
                    <?php 
                        if(count($questions)>0)
                        {echo $questions[$i++];}
                    ?>
                </h3>
                <hr class="question">
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-a" value="A" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "A") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-a" class="labela"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-b" value="B" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "B") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-b" class="labelb"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-c" value="C" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "C") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-c" class="labelc"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-d" value="D" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "D") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-d" class="labeld"> <?php if(count($answers)>0) {echo $answers[$j++];}?></label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-e" value="E" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "E") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-e" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <div class="answer">
                    <input type="radio" name="q12-answers" id="q12-answers-f" value="F" <?php if(isset($_COOKIE[$cookie_names[11]]) && $_COOKIE[$cookie_names[11]] == "F") echo 'checked="checked"'; ?>>
                    <label for="q12-answers-f" class="labelf"><?php if(count($answers)>0) {echo $answers[$j++];}?> </label>
                </div>
                <hr class="question">
                <button id="quiz-btn" name="quiz" type="submit" class="btn">Submit</button>
            </div>
        </form>
    </body>
</html>