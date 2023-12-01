<?php

namespace BrainGames\Games\BrainGcd;

use function cli\line;
use function BrainGames\Cli\greeteng;
use function BrainGames\Engine\engine;
use function BrainGames\Engine\largestDivisor;

function brainGcd()
{
    $name = greeteng('Find the greatest common divisor of given numbers.');
    for ($i = 1; $i <= 3; $i++) {
        [$question, $correctAnswer] = largestDivisor();
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
