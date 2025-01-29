<?php
// Script name: GuessNumber.php
$guess = $_POST['guess'];
$num = rand(1,10); //or you can set a fixed number, e.g. $num=5;
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number Result</title> 
    <link rel="stylesheet" href="exercise3-style.css">
</head>
<body>

    <div class="result-container">
        <h2>Guess the Number Result</h2>

        <?php
        if (!ctype_digit($guess)) {
            echo "<p class='error'>Please enter a valid number between 1-10.</p>";
        } elseif ($guess > 10 || $guess < 1) {
            echo "<p class='error'>Out of range! Please guess a number between 1-10.</p>";
        } else {
            if ($guess > $num) {
                echo "<p class='wrong'>Your guess is too high. <br> The correct number was <b>$num</b>.</p>";
            } elseif ($guess < $num) {
                echo "<p class='wrong'>Your guess is too low. <br> The correct number was <b>$num</b>.</p>";
            } else {
                echo "<p class='correct'>You're Right! <br> The number was <b>$num</b>.</p>";
            }
        }
        ?>

        <a href="GuessNumberForm.php" class="back-button">Try Again</a>
    </div>

</body>
</html>
