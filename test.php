<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
// list($bar) = "abcde";
// var_dump($bar); // NULL
echo "<br>";

$ents = array('Igor', 'Jenica', 'Daniel', 'Joy');
// Listing all the variables
list($dad, $mom, $son, $daughter) = $ents;
echo "Here is $dad, $mom, $son, and $daughter.\n";

// Listing some of them
list($dad, , $son,) = $ents;
echo "$dad lifts with $son.\n";

// Or let's skip to only the third one
list( , $mom, ,$daughter) = $ents;
echo "$mom and $daughter bought clothes!\n";


?>