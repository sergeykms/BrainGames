<?php

namespace BrainGames\Games\BrainCalc;

use function BrainGames\Engine\startGame;

// Математические операции
function mathOperation()
{
    $arrayOfOperation = ['+', '-', '*'];
    $operation = $arrayOfOperation[rand(0, 2)];
    $x = rand(1, 100);
    $y = rand(1, 100);
    $question = "{$x} {$operation} {$y}";
    switch ($operation) {
        case '-':
            return [$question, strval($x - $y)];
        case '+':
            return [$question, strval($x + $y)];
        case '*':
            return [$question, strval($x * $y)];
    };
}

function brainCalc()
{
    $nameGame = 'What is the result of the expression?';
    $dataGame = [];
    $countRounds = 3;

    for ($i = 1; $i <= $countRounds; $i++) {
        $dataGame[] = mathOperation();
    };
    startGame($nameGame, $dataGame);
}
