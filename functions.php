<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');


function randomDate($day, $month, $year)
{

    $day = rand(1, 28);
    $month = rand(1, 12);
    $year = rand(1, 2020);

    return $day . "-" . $month . "-" . $year;
}
