<?php
	// Sample Scripts
	// Script name: SampleOutput_1.php
	// Output #1: Without input validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="exercise1-style.css">
</head>
<body>

    <div class="output-container">
        <h2>OUTPUT WITHOUT VALIDATION</h2>
        <p><b>Name:</b> <?php echo htmlspecialchars($_POST['txtName']); ?></p>
        <p><b>Age:</b> <?php echo htmlspecialchars($_POST['txtAge']); ?></p>
        <p><b>Phone:</b> <?php echo htmlspecialchars($_POST['txtPhone']); ?></p>
        <p><b>Bill:</b> <?php echo htmlspecialchars($_POST['txtBill']); ?></p>
        <a href="SampleInput_1.php" class="back-button">Go Back</a>
    </div>

</body>
</html>
