<?php

/*
+---+
| 1 |
+---+
*/

$food = [
    "Ice cream",
    "Tacos",
    "Ajiaco"
];

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2];

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
*/
echo "<ul>"
    . "<li>"
    . $food[0]
    . "</li>"
    . "<li>"
    . $food[1]
    . "</li>"
    . "<li>"
    . $food[2]
    . "</li>"
    . "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
*/
$food_assoc =  [
                "dessert",
                "lunch",
                "soup"
               ];

echo $food[0] . " | " . $food_assoc[0] . "<br>";
echo $food[1] . " | " . $food_assoc[1] . "<br>";
echo $food[2] . " | " . $food_assoc[2] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
*/
$food_assoc =  [
                [ 
                    "dessert",
                    "Canada"
                ],
                [ 
                    "lunch",
                    "Mexico"
                ],
                [ 
                    "Soup",
                    "Colombia"
                ]
               ];
  

echo $food[0] . " | " . $food_assoc[0][0] . " | " . $food_assoc[0][1] . "<br>";
echo $food[1] . " | " . $food_assoc[1][0] . " | " . $food_assoc[1][1] . "<br>";
echo $food[2] . " | " . $food_assoc[2][0] . " | " . $food_assoc[2][1] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
*/

echo "<table>";
echo  "<tr>
        <th>food</th>
        <th>type</th>
        <th>origin</th>
      </tr>";
echo "<tr>
        <td>$food[0]</td>
        <td>{$food_assoc[0][0]}</td>
        <td>{$food_assoc[0][1]}</td>
      </tr>
      ";
echo "<tr>
        <td>$food[1]</td>
        <td>{$food_assoc[1][0]}</td>
        <td>{$food_assoc[1][1]}</td>
      </tr>
      ";
echo "<tr>
        <td>$food[2]</td>
        <td>{$food_assoc[2][0]}</td>
        <td>{$food_assoc[2][1]}</td>
      </tr>
      ";
echo "</table>";

?>