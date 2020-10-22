<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

$year = rand(1, 2020);
$month = rand(1, 12);
$day = rand(1, 28);
function randomDate($day, $month, $year)
{
    return $day . "-" . $month . "-" . $year;
}
echo randomDate($day, $month, $year);
