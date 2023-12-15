<?php

namespace BrainGames\Games\BrainCalc;

require_once './src/config.php';

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
        default:
            return ['', ''];
    };
}

function brainCalc()
{
    $nameGame = 'What is the result of the expression?';
    $dataGame = [];

    for ($i = 1; $i <= COUNT_ROUNDS; $i++) {
        if (mathOperation()) {
            $dataGame[] = mathOperation();
        } else {
            $dataGame = [];      
        };
    };
    startGame($nameGame, $dataGame);
}
