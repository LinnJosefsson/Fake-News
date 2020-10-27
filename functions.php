<?php

declare(strict_types=1);
require __DIR__ . ('/data.php');



/* function randomDate()
{

    $day = rand(1, 28);
    $month = rand(1, 12);
    $year = rand(1900, 2020);

    return $day . "-" . $month . "-" . $year;
} */

function sortDate($a, $b)
{
    if ($a == $b) return 0;
    return ($a < $b) ? -1 : 1;
}

$a = array($articles['publishedDate']);

usort($a, "sortDate");

$arrlength = count($a);
for ($x = 0; $x < $arrlength; $x++) {
    echo $a[$x];
}
