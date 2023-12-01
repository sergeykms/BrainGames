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

function engine(string $name, string $question, string $correctAnswer)
{
    line('Question: ' . $question); 
    $answer = prompt('Your answer');
    if ($correctAnswer !== $answer) {
        line("'" . $answer . "'" . " is wrong answer ;(. Correct answer was: " . "'" . $correctAnswer . "'");
        line("Let's try again, " . $name . '!');
        return false;
    };
    line('Correct!');
    return true;
}

// Математические операции
function mathOperation()
{
    $arrayOfOperation = ['+', '-', '*'];
    $operation = $arrayOfOperation[rand(0, 2)];
    $x = rand(1, 100);
    $y = rand(1, 100);
    $answer = "{$x} {$operation} {$y}";
    switch ($operation) {
        case '-':
            return [$answer, strval($x - $y)];
        case '+':
            return [$answer, strval($x + $y)];
        case '*':
            return [$answer, strval($x * $y)];
    };
}

// Наибольший общий делитель
function largestDivisor()
{
    $x = rand(1, 100);
    $y = rand(1, 100);
    $temp = $x <= $y ? $x : $y;
    for ($i = $temp; $i >= 1; $i--) {
        if ($x % $i === 0 && $y % $i === 0) {
            return ["{$x} {$y}", strval($i)];
        };
    };
}

// Пропущенный элемент прогресии
function missingProgression()
{
    $firstElementProgression = rand(1, 100); // первый элемент прогресии
    $stepProgression = rand(1, 10); // швг прогрессии
    $missingElementProgression = rand(1, 9); // пропущенный элемент прогресии
    $missingStepProgression = rand(1, 9); // пропущенный шаг прогресии
    $arrayProgression = []; // массив прогресии
    for ($i = 1, $j = $firstElementProgression; $i <= 10; $i++, $j += $stepProgression) {
        if ($i === $missingStepProgression) {
            $arrayProgression[] = '..';
            $missingElementProgression = strval($j);
        } else {
            $arrayProgression[] = strval($j);
        };
    };
    return [implode(" ", $arrayProgression), $missingElementProgression];
}

// Простое число
function primeNumber()
{
    $checkNumber = rand(1, 500);
    for ($i = 2; $i < $checkNumber; $i++) {
        if ($checkNumber % $i === 0) {
            return [$checkNumber, 'no'];
        };
    };
    return [$checkNumber, 'yes'];
}
