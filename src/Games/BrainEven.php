<?php
namespace BrainGames\Games\BrainEven;
use function BrainGames\Cli\greeteng;
use function BrainGames\Engine\engine;
use function cli\line;
function brainEven()
{
    $name = greeteng('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $question = rand(1, 100);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        if (!engine($name, $question, $correctAnswer)) {
            return;
        };
    };
    line('Congratulations, ' . $name . '!');
}
