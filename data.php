<?php

declare(strict_types=1);
require __DIR__ . ('/functions.php');

//fixa bilder



$authors = [
    ['id' => 1, 'fullname' => 'Linn ForTheWin'],
    ['id' => 2, 'fullname' => 'Agneta HuggtVed'],
    ['id' => 3, 'fullname' => 'Guybrush Threepwood'],
    ['id' => 4, 'fullname' => 'Din Mamma'],
    ['id' => 5, 'fullname' => 'Maia Josefsson'],
];

$articles = [
    [
        'title' => 'Taxar är två centimeter längre i år',
        'content' => 'Taxar ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[0]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '3',
        /* 'image' => 'https://www.dachshund-owner-guide.com/images/SmothHairedDachshund.jpg', */
    ],

    [
        'title' => 'Högt till tak? 4 enkla knep att sänka din acceptans!',
        'content' => 'Taket ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'author' => $authors[1]['fullname'],
        'likes' => '999991',
    ],

    [

        'title' => 'Matador berättar - Så lyckas jag hålla hemmet rent',
        'content' => 'Ja nej det är väl inte så märkligt, snälla låt mig va.
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1',
    ],

    [
        'title' => 'Akuta finansråd',
        'content' => 'Cashen dom tas ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1',
    ],

    [

        'title' => 'Intrång i sillfångst',
        'content' => 'Det vet du ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '31',
    ],

    [

        'title' => 'Skuldsätt skuldpaddan!',
        'content' => 'Skuldpaddor skummar skulden! dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1',
    ],

    [

        'title' => 'Farstu-boende, läs allt om nya hipstertrenden!',
        'content' => 'Fa fafa fafafa fa dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[0]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1000000000',
    ],

    [

        'title' => 'Syjuntan synad',
        'content' => 'Kanot-vm dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[1]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '-2',
    ],

    [

        'title' => 'Elon Musk satsar på korsstygn',
        'content' => 'Loooooorem! sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1768',
    ],


    [

        'title' => 'Agneta fältskog hugger ved',
        'content' => 'Det är bättre än att fälla skog!
         Dolor sit amet consectetur
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'publishedDate' => call_user_func(randomDate($day, $month, $year)),
        'likes' => '1',
    ],

];
