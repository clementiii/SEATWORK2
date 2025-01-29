<?php
// Sample Scripts
// Script name: SampleInput_2.php
// Sample Input with validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2 - Data Entry</title>
    <link rel="stylesheet" href="exercise2-style.css">
</head>
<body>

    <div class="form-container">
        <h2>DATA ENTRY</h2>
        <form action="SampleOutput_2.php" method="post">
            <label>Enter your name:</label>
            <input type="text" name="txtName" required>

            <label>Enter your age:</label>
            <input type="text" name="txtAge" required>

            <label>Enter your phone no.:</label>
            <input type="text" name="txtPhone" required>

            <label>Enter your bill:</label>
            <input type="text" name="txtBill" required>

            <div class="button-group">
                <input type="submit" name="btnSubmit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

</body>
</html>
