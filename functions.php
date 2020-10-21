<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');

$year = mt_rand(1, 2020);
$month = mt_rand(1, 12);
$day = mt_rand(1, 28);

function randomDate($day, $month, $year)
{
    $getDate = $day . "-" . $month . "-" . $year;
    return $getDate;
}

echo randomDate($day,  $month, $year);
