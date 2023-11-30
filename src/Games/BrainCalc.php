<?php

namespace BrainGames\Games\BrainCalc;

use function cli\line;
use function BrainGames\Cli\greeteng;
use function BrainGames\Engine\engine;
use function BrainGames\Engine\mathOperation;

function brainCalc()
{
    $name = greeteng('What is the result of the expression?');

    $arrayOfOperation = ['+', '-', '*'];
    for ($i = 1; $i <= 3; $i++) {
        [$question, $correctAnswer] = mathOperation(rand(1, 100), rand(1, 100), $arrayOfOperation[rand(0, 2)]);
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
