<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\primeNumber;
use function BrainGames\Engine\engine;
use function cli\line;
use function BrainGames\Cli\greeteng;



function brainPrime()
{
    $name = greeteng('Answer "yes" if given number is prime. Otherwise answer "no".');
    for ($i = 1; $i <= 3; $i++) {
        [$question, $correctAnswer] = primeNumber();
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
