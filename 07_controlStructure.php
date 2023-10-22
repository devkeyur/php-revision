<?php
    // Control structure means it gives the condition to the value

    $x = 10;

    // if ($x == "10") {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x === 10) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x > 12) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x < 12) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x >= 10) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x <= 10) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    // if ($x != 10) {
    //     echo"Valid";
    // }else{
    //     echo"not valid";
    // }

    $t = date("H : I");

    echo "The time is =>  $t <br />";

    if ($t < "10") {
        echo "Good morning";
    } else if ($t < "20") {
        echo "Have a good day";
    }else {
        echo "Have a good night";
    }
    
?>