<?php

namespace BrainGames\Games\BrainCalc;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 100;
const START_ROUND = 1;
const COUNT_ROUNDS = 3;

use function BrainGames\Engine\startGame;

// Математические операции
function mathOperation(int $x, int $y, string $operation)
{
    switch ($operation) {
        case '-':
            return $x - $y;
        case '+':
            return $x + $y;
        case '*':
            return $x * $y;
        default:
            break;
    }
}

function brainCalc()
{
    $nameGame = 'What is the result of the expression?';
    $arrayOfOperation = ['+', '-', '*'];
    $dataGame = [];

    for ($i = START_ROUND; $i <= COUNT_ROUNDS; $i++) {
        $firstOperand = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $secondOperand = rand(BEGIN_OF_RANGE, END_OF_RANGE);
        $operation = $arrayOfOperation[rand(0, 2)];
        $resultOfCalc = mathOperation($firstOperand, $secondOperand, $operation);

        if ($resultOfCalc) {
            $dataGame[] = ["{$firstOperand} {$operation} {$secondOperand}", (string) $resultOfCalc];
        }
    }
    startGame($nameGame, $dataGame);
}
