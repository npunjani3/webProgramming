<?php
include('./common.php');
session_start(); /* Starts the session */
$logins = load_creds();
global $logins;
if(!isset($_SESSION['UserData']['Username'])){
    die(header("location: ./login.php"));
}
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
        logo();
        navBar();
        ?>
        <div class="results-container">
            <h2>Past Results</h2>
            <table class="quiz-data">
                <tr>
                    <th>Username</th>
                    <th>Quiz Date</th>
                    <th>Quiz</th>
                    <th>Result</th>
                </tr>
                <?php
                $file = json_decode(file_get_contents('./assets/past_results.json'), true);
                $username = array_search($_SESSION['UserData']['Username'], $logins);
                if (array_key_exists($username, $file)) {
                    $userarray = $file[$username];
                    $userCount = count($userarray);
                    for ($x = 0; $x < $userCount; $x++) {
                        ?>
                        <tr>
                            <td><?= $username;?></td>
                            <td><?= $userarray[$x][1];?></td>
                            <td><?= $userarray[$x][0];?></td>
                            <td><?= $userarray[$x][3];?></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td>There's</td>
                        <td>Nothing Here!</td>
                        <td>Do a</td>
                        <td>quiz!</td>
                    </tr>
                <?php
                }
            ?>
            </table>
        </div>
    </body>
</html>