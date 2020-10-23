<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');





function randomDate()
{

    $day = rand(1, 28);
    $month = rand(1, 12);
    $year = rand(1900, 2020);

    return $day . "-" . $month . "-" . $year;
}
