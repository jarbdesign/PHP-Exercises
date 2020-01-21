<?php
/*
+---+
| 1 |
+---+
*/

$language = "PHP!";
$greeting = "Welcome to $language.";
echo $greeting;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/* 
+---+
| 2 |
+---+
*/

$firstName = "Julian";
$lastName = "Ruiz";
$day = 25;
$month = "October";
$year = 1990;

$assembled = "My name is $firstName $lastName. I was born on $day of $month in $year.";
echo $assembled;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
*/

$length = 3.5;
$width = 6.5;
$area = $length * $width;

echo "area " . $area;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
*/
$product = "armchair";
$price = 249.00;
$tax = 0.13;
$delivery = 0.05;
$total = ($price + $price * $delivery) + ($price + $price * $delivery) * $tax;

echo $product . ": " . "$" . $total;

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the final statement from previous exercise in the following markup 
(including the placeholder image, armchair: $295.44 
should be contained by figcaption element):
<figure>
  <img src="https://placehold.jp/24/e8d2ae/fff/300x300.png" alt="placeholder-image">
  <figcaption> ... </figcaption>
</figure>
*/

$figcaption = $product . ": " . "$" . $total;
echo "<figure>
  <img src='https://placehold.jp/24/e8d2ae/fff/300x300.png' alt='$product: $$total'>
  <figcaption> $figcaption </figcaption>
</figure>";
?>
