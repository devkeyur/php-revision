<?php
    // A function is a block of statements that can be used repeatedly in a program.
    // A function will not execute automatically when a page loads.
    // A function will be executed by a call to the function.
    // A user-defined function declaration starts with the word function:

//     Syntax
// function functionName() {
//   code to be executed;
// }

// function greet($user) {
//     echo"Hello $user <br />";
// }

// greet("keyur malete");


// if you want to access global variable in function
$x = 20;
function add(){
    global $x;
    echo $x;
}
add();

?>