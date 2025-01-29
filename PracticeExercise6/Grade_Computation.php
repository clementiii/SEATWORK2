<?php
    //Script name: Grade_Computation.php
?>
<html>
  <head>
      <title>Grade Computation</title>
      <link rel="stylesheet" type="text/css" href="exercise6-style.css">
  </head>

<body>
<?php
// declare variables
$nameErr = $midErr = $finErr = "";
$name = $midGrade = $finGrade = $semGrd = $remarks = $fontColor = "";
$nameFlag = $midFlag = $finFlag = FALSE;

// declare function named testInput
function testInput($data) 
{
  $data = trim($data); // trim the text value
  $data = stripslashes($data); // removed slash
  $data = htmlspecialchars($data); // removed special characters like <,>,% and so on.
  return $data; // return the value of $data
}

// check if the method in form set as POST
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
// check if name textfield is empty
if (empty($_POST['txtName']))
{	
$nameErr = "Name is required.";
$nameFlag = FALSE;
}
else
{	
$name = testInput($_POST['txtName']);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z .]*$/",$name)) // same with this (!ctype_alpha($name))
{
$nameErr = "Only letters and white space allowed";
$nameFlag = FALSE;
}
}
		
if (!empty($name) && preg_match("/^[a-zA-Z .]*$/",$name))
$nameFlag = TRUE;

		
// check if midGrade textfield is empty
if (empty($_POST['txtMid']))
{	
$midErr = "Midterm grade is required.";
$midGradeFlag = FALSE;
}
else
{	
    $midGrade = testInput($_POST['txtMid']);
// check if midterm Grade only contains numberss
if (!is_numeric($midGrade))
{
$midErr = "Only numbers are allowed.";
$midGradeFlag = FALSE;
}
                          else
                             if (($midGrade < 50) || ($midGrade > 100))
  {
  $midErr = "Midterm Grade must be between 50 - 100 only.";
  $midGradeFlag = FALSE;
  }		
              }

              if (!empty($midGrade) && is_numeric($midGrade) && (($midGrade>=50) && ($midGrade <=100)))
                   $midGradeFlag = TRUE;

              // check if finGrade textfield is empty
              if (empty($_POST['txtFin']))
              {	
              $finErr = "Final grade is required.";
              $finGradeFlag = FALSE;
              }
              else
             {	
             $finGrade = testInput($_POST['txtFin']);
                  // check if final grade only contains numbers
if (!is_numeric($finGrade))
{
$finErr = "Only numbers are allowed.";
$finGradeFlag = FALSE;
}
else
if (($finGrade < 50) || ($finGrade > 100))
{
$finErr = "Final Grade must be between 50 - 100 only.";
$finGradeFlag = FALSE;
}
               }
if (!empty($finGrade) && is_numeric($finGrade) && (($finGrade>=50) && ($finGrade <=100)))
$finGradeFlag = TRUE;

//compute for the semGrade
if (($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE))
{
$semGrd = ($midGrade+$finGrade)/2;

//determine remarks
if ($semGrd>=74.5)
$remarks = "Passed";
else
$remarks = "Failed";
              }
  }	
?>

<h2>GRADE COMPUTATION </h2><br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p><span class="error"> * required field.</span></p>
Student Name: <input type="textbox" name="txtName" value="<?php echo $name; ?>">
<span class="error"> * <?php echo $nameErr;?> </span><br>
Midterm Grade: <input type="textbox" name="txtMid"  value="<?php echo $midGrade; ?>">
<span class="error"> * <?php echo $midErr;?> </span><br>
Final Grade: <input type="textbox" name="txtFin"  value="<?php echo $finGrade; ?>">
<span class="error"> * <?php echo $finErr;?> </span><br><br>
<input type="submit" value="Compute" name="btnCompute">
</form>
<br>

<?php
if (isset($_POST['btnCompute']) && ($nameFlag == TRUE) && ($midGradeFlag == TRUE) && ($finGradeFlag == TRUE))
{
echo "<h2>GRADE INFORMATION</h2><br>";
echo "Student Name: ".$name."<br>";
echo "Midterm Grade: ".$midGrade."<br>";
echo "Final Grade: ".$finGrade."<br>";

echo "Semestral Grade: ".round($semGrd,2)."<br>";
if ($semGrd <= 74)
$fontColor = "#FF0000";
else
$fontColor = "#000000";
echo "Remarks: <font color=$fontColor>".$remarks."</font><br>";
}
?>
</body>
</html>
