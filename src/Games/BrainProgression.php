<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Cli\greeteng;
use function cli\line;
use function BrainGames\Engine\engine;
use function BrainGames\Engine\missingProgression;

function brainProgression()
{
    $name = greeteng('What number is missing in the progression?');
    for ($i = 1; $i <= 3; $i++) {
        [$question, $correctAnswer] = missingProgression();
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
