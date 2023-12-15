<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greeteng;

function startGame(string $nameGame, array $dataGame)
{
    $name = greeteng();
    line($nameGame);
    foreach ($dataGame as $items) {
        [$question, $correctAnswer] = $items;
        if ($question === '') {
            echo("Invalid operation\n");
            return;
        };
        line('Question: ' . $question);
        $answer = prompt('Your answer');
        if ($correctAnswer !== $answer) {
            line("'" . $answer . "'" . " is wrong answer ;(. Correct answer was: " . "'" . $correctAnswer . "'");
            line("Let's try again, " . $name . '!');
            return false;
        };
        line('Correct!');
    };
    line('Congratulations, ' . $name . '!');
}
