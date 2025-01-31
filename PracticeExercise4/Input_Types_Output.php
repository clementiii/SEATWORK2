<?php
// Script name: Input_Types_Output.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of HTML Form Tags in PHP</title>
    <link rel="stylesheet" href="exercise4-style.css">
</head>

<body>

    <div class="output-container">
        <h2>Output From Your Input</h2>

        <?php
        // Gather and display form input
        $name = $_POST['txtName'];
        $age = $_POST['txtAge'];
        $course = $_POST['txtCourse'];
        $rdo = $_POST['rdo'];
        $job = $_POST['cboJob'];
        $comments = $_POST['txtaComments'];

        echo "<div class='section'>
                <b>TextField Output</b><br>
                Hi, $name<br>
                You are $age years old.<br>
                Your course is $course.<br><br>
              </div>";

        echo "<div class='section'>
                <b>Checkbox Output</b><br>";
        if (isset($_POST['chkYes']))
            echo "You are an officer of COMSOC.<br><br>";
        echo "</div>";

        echo "<div class='section'>
                <b>Multiple Checkboxes Output</b><br>";
        echo "Your favorite computer subject/s are:<br>";
        if (isset($_POST['chkCP']))
            echo "Computer Programming<br>";
        if (isset($_POST['chkCG']))
            echo "Computer Graphics<br>";
        if (isset($_POST['chkWBA']))
            echo "Web Based Application<br><br>";
        echo "</div>";

        echo "<div class='section'>
                <b>Radio Button Output</b><br>
                You prefer: $rdo<br><br>
              </div>";

        echo "<div class='section'>
                <b>ComboBox Output</b><br>
                You prefer to be a: $job<br><br>
              </div>";

        echo "<div class='section'>
        <b>ListBox Output</b><br>
        Your preferred thesis title(s) are:<br>";
        if (isset($_POST['lstThesisTitle'])) {
            // Ensure $_POST['lstThesisTitle'] is an array
            $thesisTitles = (array) $_POST['lstThesisTitle'];
            echo implode(", ", $thesisTitles);
        } else {
            echo "None<br><br>";
        }
        echo "</div>";

        echo "<div class='section'>
                <b>TextArea Output</b><br>
                Your comments: $comments<br><br>
              </div>";
        ?>

    </div>

</body>

</html>