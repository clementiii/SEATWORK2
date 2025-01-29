<?php
// Sample Scripts
// Script name: SampleOutput_2.php
// Output from SampleInput_2.php

if(ctype_alpha($_POST['txtName'])) // Letters A-Z and a-z are accepted
    $name = $_POST['txtName'];
else
    $name = "<span class='error'>Type letters A-Z only</span>";

if(ctype_digit($_POST['txtAge'])) // Only integers or whole numbers are accepted
    $age = $_POST['txtAge'];
else
    $age = "<span class='error'>Type numbers 0-9 only</span>";

if(empty($_POST['txtPhone'])) // Will test if the textbox is empty
    $phone = "<span class='error'>Phone number is empty</span>";
else
    $phone = $_POST['txtPhone'];

if(is_numeric($_POST['txtBill'])) // Only numbers are accepted (integer/floating point)
    $bill = $_POST['txtBill'];
else
    $bill = "<span class='error'>Letters and special characters are not allowed</span>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2 - Output</title>
    <link rel="stylesheet" href="exercise2-style.css">
</head>
<body>

    <div class="output-container">
        <h2>OUTPUT WITH INPUT VALIDATION</h2>
        <p><b>Name:</b> <?php echo $name; ?></p>
        <p><b>Age:</b> <?php echo $age; ?></p>
        <p><b>Phone:</b> <?php echo $phone; ?></p>
        <p><b>Bill:</b> <?php echo $bill; ?></p>
        <a href="SampleInput_2.php" class="back-button">Go Back</a>
    </div>

</body>
</html>
