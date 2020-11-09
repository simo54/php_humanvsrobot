
<?php

// Number Guessing Game
// Create a way to give feedback to the users, such that:
// - If they guess correctly, you tell them
// - If they guess incorrectly, you tell them if it was too high or too low
// - As bonus, also check to see if the guessed number is out of range

// Range
$min = 1; 
$max = 50;

// Human choice
$guess = 30; //Change this value to test!

// Robot choice
$num = rand($min, $max); // Change this value to test!

echo "Robot choosed random number. \nHuman picked up " . $guess . ".\n\n";

if($guess < $min ){
    echo "You are too low, try again!";
} else if ($guess > $max){
    echo "You are too high, try again!";
} else if($guess === $num){
    echo "You really got it!";
} else if($guess > $num){
    echo "You are too high! As a hint, my number was " . ($guess - $num) . (($guess - $num) === 1 ? " number lower than yours :)" : " numbers lower than yours :)");  
} else if($guess < $num){
    echo "You are too low! As a hint, my number was " . ($num - $guess) . (($num - $guess) === 1 ? " number higher than yours :)" : " numbers higher than yours :)");
}

