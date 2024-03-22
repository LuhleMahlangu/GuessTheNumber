
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Game</title>
</head>
<body>

<form>
    <input type="submit" value="Start" name="Start">
    <P>In this game you're up against a computer and in this game you will have to pick a number
between 1 and 10. Guess the correct number that the computer has picked and you will have won the game.
Fail to pick to right number means you have failed to win the game.
After the game is finished depending on your outcome you can either decide whether or not you'd like to
carry on or leave the game</p>
</form>


<?php


function pickRandomNumber() {
    $randomNumber = rand(1, 10); 
    return $randomNumber;
  }

if(isset($_POST['guess'])) {
    
    $userGuess = $_POST['guess'];
    $computerNumber = rand(1, 10);
    
    if($userGuess == $computerNumber) {
        echo "You are right! The game picked " . $computerNumber . ".";
    } else {
        echo "You are wrong, the game picked " . $computerNumber . ". Try again!";
    }
}
?>

<h1>Guess a number between 1 and 10:</h1>

<form method="post" action="">
    <?php
    
    for($i = 1; $i <= 10; $i++) {
        echo '<button type="submit" name="guess" value="' . $i . '">' . $i . '</button>';
    }
    ?>
</form>
</body>
</html>

















