<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Roll Dice</title>
    </head>
    <body>
        
        <p>Your guess is: <?= $guess ?></p>

        <?php if ($guess == $randNum): ?>
        <p>You guessed correctly!</p>
        <?php endif ?>

        <p>Your random number is: <?= $randNum ?></p>
        
    </body>
</html>