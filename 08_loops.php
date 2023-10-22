<?php
// Loops are used to execute the same block of code again and again,
// as long as a certain condition is true.

// for loop
// is used when you know in advance how many times the script should run.


// for ($i = 0; $i <= 10; $i++){
//     echo "2 * $i = ". 2*$i ."<br />";
// }

// While loop
// is executes a block of code as long as the specified condition is true.

// $x = 1;
// while ($x <= 10) {
//     echo"$x";
//     $x++;
// }

// do while loop
// loop will always execute the block of code once, it will then
// check the condition, and repeat the loop while the specified condition is true.
$x = 5;
do {
    echo 2*$x;
    echo "<br />";
    $x++;
} while ($x <= 10);
?>