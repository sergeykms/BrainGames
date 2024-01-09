<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greeting;

function startGame(string $nameGame, array $dataGame)
{
    $name = greeting();
    line($nameGame);
    foreach ($dataGame as $items) {
        [$question, $correctAnswer] = $items;
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        if ($correctAnswer !== $answer) {
            line("'" . $answer . "'" . " is wrong answer ;(. Correct answer was: " . "'" . $correctAnswer . "'");
            line("Let's try again, " . $name . '!');
            return;
        }
        line('Correct!');
    }
    line('Congratulations, ' . $name . '!');
}
