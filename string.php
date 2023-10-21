<?php
// string is a sequence of character.
// in double quot " " it will access a variable.
// in the single quot ' ' it will access as a string.

$name = "Keyur malete";

echo "Hello my name is $name <br />";
echo 'Hello my name is $name <br />';

echo "strlen() function is used to check string length : " . strlen($name) . "<br />";
echo "str_word_count() function is used to count a word : " . str_word_count($name) . "<br />";
echo "strpos() function is used to check the position of the character : " . strpos($name, "r") . "<br />";
echo "ucfirst() function is convert the first letter of character : " . ucfirst($name) . "<br />";
echo "ucwords() function is convert to the capital of every words  : " . ucwords($name) . "<br />";
echo "strtoupper() function is convert to the capital case : " . strtoupper($name) . "<br />";
echo "strtolower() function is convert to the lower case  : " . strtolower($name) . "<br />";

?>