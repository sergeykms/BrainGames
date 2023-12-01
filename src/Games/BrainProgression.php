<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\missingProgression;
use function BrainGames\Engine\engine;
use function cli\line;
use function BrainGames\Cli\greeteng;

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
