<?php

namespace BrainGames\Games\BrainProgression;
use const BrainGames\Engine\COUNT_ROUNDS;

const BEGIN_OF_RANGE = 1;
const END_OF_RANGE = 500;
const BEGIN_OF_STEP = 1;
const END_OF_STEP = 10;
const COUNT_OF_STEP = 9; // число шагов


use function BrainGames\Engine\startGame;

function missingProgression()
{
    $firstElementProgression = rand(BEGIN_OF_RANGE, END_OF_RANGE); // первый элемент прогресии
    $stepProgression = rand(BEGIN_OF_STEP, END_OF_STEP); // швг прогрессии
    $lastElementProgression = $firstElementProgression + ($stepProgression * COUNT_OF_STEP); // последний элемент
    $missingStepProgression = rand(0, COUNT_OF_STEP); // пропущенный шаг прогресии
    $arrayProgression = range($firstElementProgression, $lastElementProgression, $stepProgression);
    return [$arrayProgression, $missingStepProgression];
}

function brainProgression()
{
    $nameGame = 'What number is missing in the progression?';
    $dataGame = [];

    for ($i = 1; $i <= COUNT_ROUNDS; $i++) {
        [$arrayProgression, $missingStepProgression] = missingProgression();
        $missingElementProgression = $arrayProgression[$missingStepProgression]; // пропущенный элемент прогресии
        $arrayProgression[$missingStepProgression] = ".."; // замена
        $dataGame[] =  [implode(" ", $arrayProgression), (string) $missingElementProgression];
    }

    startGame($nameGame, $dataGame);
}
