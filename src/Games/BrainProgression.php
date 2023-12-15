<?php

namespace BrainGames\Games\BrainProgression;

require_once 'src/config.php';

use function BrainGames\Engine\startGame;

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

function brainProgression()
{
    $nameGame = 'What number is missing in the progression?';
    $dataGame = [];

    for ($i = 1; $i <= COUNT_ROUNDS; $i++) {
        $dataGame[] = missingProgression();
    };
    startGame($nameGame, $dataGame);
}
