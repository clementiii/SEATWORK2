<?php
// Script name: Holiday.php
?>

<html> 
   <head> 
      <title> PAPSI Holidays </title>
      <link rel="stylesheet" type="text/css" href="exercise5-style.css">
   </head>
   <body>
      <h2> PAPSI Holidays </h2>
      <h3> Reservation Details </h3>
      <div class="result">
         <?php
            // Base price and initial modifiers
            $price = 500;
            $hotelmodifier = 1;
            $placemodifier = 1;
            $hotel = $_POST['rdoHotel'];
            $destination = $_POST['rdoDestination'];

            // Check hotel and destination to calculate price
            if ($hotel == "three") {
               if ($destination == "HongKong") {
                  $hotelmodifier = 2;
                  $price = $price * $placemodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else if ($destination == "Singapore") {
                  $hotelmodifier = 3.5;
                  $price = $price * $placemodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else if ($destination == "Malaysia") {
                  $price = $price * $placemodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else {
                  echo "Sorry, you have made an invalid entry.";
               }
            } else if ($hotel == "five") {
               if ($destination == "HongKong") {
                  $hotelmodifier = 2.5;
                  $price = $price * $placemodifier * $hotelmodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else if ($destination == "Singapore") {
                  $hotelmodifier = 4;
                  $price = $price * $placemodifier * $hotelmodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else if ($destination == "Malaysia") {
                  $price = $price * $placemodifier * $hotelmodifier;
                  echo "Your reservation has been saved. <br> Your one-week holiday at $destination costs \$$price. <br> Thank you for choosing PAPSI Holidays! Enjoy!";
               } else {
                  echo "Sorry, you have made an invalid entry.";
               }
            } else {
               echo "Sorry, you have made an invalid entry.";
            }
         ?>
         <br><br>
         <a href="index.html" class="btn">Make Another Reservation</a>
      </div>
   </body>
</html>
