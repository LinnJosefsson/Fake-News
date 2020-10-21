<?php

declare(strict_types=1);

//fixa bilder

/*lägg in variabel $published i publish date i $actricles 
 specifiera i function */

/* $commercials = [
    ['id' => 1, 'name' => 'Milk-commercial'],
    ['id' => 2, 'name' => 'Bread-commercial'],
    ['id' => 3, 'name' => 'Apple-commercial'],
    ['id' => 4, 'name' => 'Lorem-commercial'],
    ['id' => 5, 'name' => 'Commercial commercial'],

]; */



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
        'published date' => 010101,
        'likes' => '3',
        /* 'image' => 'https://www.dachshund-owner-guide.com/images/SmothHairedDachshund.jpg', */
    ],

    [
        'title' => 'Högt till tak? 4 enkla knep att sänka din acceptans!',
        'content' => 'Taket ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'published date' => 020202,
        'author' => $authors[1]['fullname'],
        'likes' => '999991',
    ],

    [
        'title' => 'Akuta finansråd',
        'content' => 'Cashen dom tas ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'published date' => 030303,
        'likes' => '1',
    ],

    [

        'title' => 'Intrång i sillfångst',
        'content' => 'Det vet du ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'published date' => 040404,
        'likes' => '31',
    ],

    [

        'title' => 'Skuldsätt skuldpaddan!',
        'content' => 'Skuldpaddor skummar skulden! dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'published date' => 050505,
        'likes' => '1',
    ],

    [

        'title' => 'Farstu-boende, läs allt om nya hipstertrenden!',
        'content' => 'Fa fafa fafafa fa dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[0]['fullname'],
        'published date' => 150505,
        'likes' => '1000000000',
    ],

    [

        'title' => 'Syjuntan synad',
        'content' => 'Kanot-vm dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[1]['fullname'],
        'published date' => 060606,
        'likes' => '-2',
    ],

    [

        'title' => 'Elon Musk satsar på korsstygn',
        'content' => 'Loooooorem! sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'published date' => 070707,
        'likes' => '1768',
    ],
    [

        'title' => 'Matador berättar - Så lyckas jag hålla hemmet rent',
        'content' => 'Ja nej det är väl inte så märkligt
         dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'published date' => 030303,
        'likes' => '1',
    ],

    [

        'title' => 'Agneta fältskog hugger ved',
        'content' => 'Det är bättre än att fälla skog!
         Dolor sit amet consectetur
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'published date' => 030303,
        'likes' => '1',
    ],

];
