<?php

if ($argc == 1){
    fwrite(STDOUT, 'Please pick a minimum number: ' ) . PHP_EOL;
        $min = trim(fgets(STDIN));
    fwrite(STDOUT, 'Please pick a maximum number: ') . PHP_EOL;
        $max = trim(fgets(STDIN));
} else if($argc == 3){
    $min = $argv[1];
    $max = $argv[2];
}

function playGame($min, $max){

// game picks a random number between 1 and 100.
$randomNumber = mt_rand($min, $max);
$attempts = 1;

// prompts user to guess the number
fwrite(STDOUT, 'What\'s your guess? ');
$guess = trim(fgets(STDIN)) . PHP_EOL;

    do {
        // if user's guess is less than the number, it outputs "HIGHER"
            //add attempt
        if ($guess < $randomNumber) {
            $attempts++;
            fwrite(STDOUT, 'HIGHER. Pick again. ') . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        } else if ($guess > $randomNumber) {
        // if user's guess is more than the number, it outputs "LOWER"
            //add attempt
            $attempts++;
            fwrite(STDOUT, 'LOWER. Pick again. ') . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        }
    } while ($guess != $randomNumber);

    // if a user guesses the number, the game should declare "GOOD GUESS!"
    if ($guess == $randomNumber){
        echo 'YOU WIN! GOOD GUESS.' . PHP_EOL;
        echo "You guessed $attempts times." . PHP_EOL;
    }
}
playGame($min, $max);

?>