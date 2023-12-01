<?php
namespace BrainGames\Games\BrainCalc;
use function BrainGames\Engine\mathOperation;
use function BrainGames\Cli\greeteng;
use function BrainGames\Engine\engine;
use function cli\line;

function brainCalc()
{
    $name = greeteng('What is the result of the expression?');
    for ($i = 1; $i <= 3; $i++) {
        [$question, $correctAnswer] = mathOperation();
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
