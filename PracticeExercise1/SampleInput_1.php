<?php
	// Sample Scripts
	// Script name: SampleInput_1.php
	// Sample Scripts without input validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="exercise1-style.css">
</head>
<body>

    <div class="form-container">
        <h2>DATA ENTRY</h2>
        <form action="SampleOutput_1.php" method="post">
            <label for="txtName">Enter your name:</label>
            <input type="text" name="txtName" id="txtName">

            <label for="txtAge">Enter your age:</label>
            <input type="text" name="txtAge" id="txtAge">

            <label for="txtPhone">Enter your phone no.:</label>
            <input type="text" name="txtPhone" id="txtPhone">

            <label for="txtBill">Enter your bill:</label>
            <input type="text" name="txtBill" id="txtBill">

            <div class="button-group">
                <input type="submit" name="btnSubmit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

</body>
</html>
