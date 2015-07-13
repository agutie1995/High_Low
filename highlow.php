<?php
function playGame(){
// game picks a random number between 1 and 100.
$randomNumber = mt_rand(1, 100);
$attempts = 1;

// prompts user to guess the number
fwrite(STDOUT, 'Pick a number between 1 and 100: ');
$guess = trim(fgets(STDIN)) . PHP_EOL;

    do {
        // if user's guess is less than the number, it outputs "HIGHER"
        if ($guess < $randomNumber) {
            $attempts++;
            fwrite(STDOUT, "HIGHER. Pick again. ") . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        } else if ($guess > $randomNumber) {
        // if user's guess is more than the number, it outputs "LOWER"
            $attempts++;
            fwrite(STDOUT, "LOWER. Pick again. ") . PHP_EOL;
            $guess = trim(fgets(STDIN)) . PHP_EOL;
        }
    } while ($guess != $randomNumber);

    // if a user guesses the number, the game should declare "GOOD GUESS!"
    if ($guess == $randomNumber){
        echo "YOU WIN! GOOD GUESS." . PHP_EOL;
        echo "You guessed $attempts times." . PHP_EOL;
    }
}
playGame();
?>