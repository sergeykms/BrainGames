<?php

namespace BrainGames\Engine;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\greeteng;


function startGame(string $nameGame, array $dataGame)
{
    $name = greeteng($nameGame);
    foreach ($dataGame as $items) {
        [$question, $correctAnswer] = $items;
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
