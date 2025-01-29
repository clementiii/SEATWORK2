<?php
//Script name: Holiday.php
?>

<html> 
   <head> 
      <title> PAPSI Holidays </title> 
   </head>
<body bgcolor="pink">
<h2> PAPSI Holidays </h2>
<h3> Reservation Form </h3>
<?php
$price = 500;
$hotelmodifier = 1;
$placemodifier = 1;
$hotel = $_POST['rdoHotel'];
$destination = $_POST['rdoDestination'];

if ($hotel=="three") {
   if ($destination=="HongKong") {
	$hotelmodifier = 2;
	$price = $price * $placemodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }
   else if ($destination=="Singapore") {
	$hotelmodifier = 3.5;
	$price = $price * $placemodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }
   else if ($destination=="Malaysia") {
	$price = $price * $placemodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }
   else {
   	echo "Sorry, you have made an invalid entry.";
   }
}
else if ($hotel=="five") {
   if ($destination=="HongKong") {
	$hotelmodifier = 2.5;
	$price = $price * $placemodifier * $hotelmodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }

   else if ($destination=="Singapore") {
	$hotelmodifier = 4;
	$price = $price * $placemodifier * $hotelmodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }

   else if ($destination=="Malaysia") {
	$price = $price * $placemodifier * $hotelmodifier;
	echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
   }
   else {
   	echo "Sorry, you have made an invalid entry.";
   }
}
else {
    	echo "Sorry, you have made an invalid entry.";
}
?>
</body>
</html>
