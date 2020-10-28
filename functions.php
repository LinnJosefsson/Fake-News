<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');


function sortDates(array $element1, array $element2): int
{
    $datetime1 = strtotime($element1['publishedDate']);
    $datetime2 = strtotime($element2['publishedDate']);
    return $datetime2 - $datetime1;
}  


/* 
Kan ej användas pga datum måste sorteras enligt uppgiften

function randomDate()
{

    $day = rand(1, 28);
    $month = rand(1, 12);
    $year = rand(1900, 2020);

    return $day . "-" . $month . "-" . $year;
} */
