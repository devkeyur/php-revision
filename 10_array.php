<?php
// An array stores multiple values in one single variable:

// ex of index array
// $car = array("BMW", "Mer", "TVS", "all", 10, 20);
// echo"$car"; // gives error
// echo "<pre>";
// print_r($car);

// for each loop

// foreach ($car as $list) {
//     echo $list;
//     echo"<br/>";
// }

//  if we want key and value
// foreach ($car as $key => $list) {
//     echo $list . " ". $key;
//     echo"<br/>";
// }

// ex of associate array
// An array is a special variable, which can hold more than one value at a time.

// $user = array("Name" => "Keyur", "City" => "vadodara");
// echo "<pre>";
// print_r($user);
// echo "";

// if you want specific index OR how to access array

// echo $car['0'];
// echo $car['2'];
// echo $car['1'];
// echo $car['4'];

// multi damnation array
// A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
//     A multidimensional array is an array containing one or more arrays.

// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
// $cars = array(
//     array("volvo", 22, 16),
//     array("BMW", 22, 16),
//     array("SAB", 22, 16),
//     array("Range rover", 22, 16)
// );

// echo "<pre>";
// print_r($cars);

// print_r ($cars);
// print_r($cars[2][0]);

// Select example (dropdown)
$city = array("Gujarat","Delhi","Agra","Pune","Mumbai","Nashik",) ;
sort($city);

// foreach ($city as $cities) {
//     echo "". $cities ."<br />";
// }

?>

<select>
    <option>Select City</option>
    <?php
        foreach ($city as $cites) {
            echo "<option> $cites </option>";
        }

        // for ($i=0; $i < count($city) ; $i++){
        //     echo "<option> $city[$i] </option>";
        // }
    ?>
</select>