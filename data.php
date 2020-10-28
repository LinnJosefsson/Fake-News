<?php

declare(strict_types=1);

$authors = [
    ['id' => 1, 'fullname' => 'Linn ForTheWin'],
    ['id' => 2, 'fullname' => 'Sten Kvist'],
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
        'publishedDate' => '2020-10-27',
        'likes' => '3',
        'image' => 'https://www.homesalive.ca/media/wysiwyg/Blogs/2017/April/extra-long-daschund.jpg'
    ],

    [
        'title' => 'Högt till tak? 4 enkla knep att sänka din acceptans!',
        'content' => 'Taket ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'publishedDate' => '2020-8-9',
        'author' => $authors[1]['fullname'],
        'likes' => '999991',
        'image' => 'https://www.familyhandyman.com/wp-content/uploads/sites/9/2017/08/measure-to-ceiling.jpg'
    ],

    [

        'title' => 'Matador berättar - Så lyckas jag hålla hemmet rent',
        'content' => 'Ja nej det är väl inte så märkligt, snälla låt mig va.
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'publishedDate' => '1945-4-9',
        'likes' => '1',
        'image' => 'https://www.worldculturepictorial.com/images/content_3/matador-bull.jpg'
    ],

    [
        'title' => 'Alkoholen talar ut om sina människoproblem',
        'content' => 'Jag orkar inte mer nu. ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'publishedDate' => '1955-6-11',
        'likes' => '1',
        'image' => 'http://krapps.com/wp-content/uploads/2009/11/atalkingbeersplash.jpg'
    ],

    [

        'title' => 'Intrång i sillfångst',
        'content' => 'Det vet du ipsum dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[3]['fullname'],
        'publishedDate' => '1984-03-6',
        'likes' => '31',
        'image' => 'https://www.msc.org/images/default-source/msc-english/content-banner/fish-to-eat/herring.jpg?sfvrsn=d1da5a4c_4'
    ],

    [

        'title' => 'Skuldsätt skuldpaddan!',
        'content' => 'Skuldpaddor skummar skulden! dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'publishedDate' => '1987-02-16',
        'likes' => '1',
        'image' => 'https://i.imgur.com/9WBRvmn.jpg'
    ],

    [

        'title' => 'Farstu-boende, läs allt om nya hipstertrenden!',
        'content' => 'Fa fafa fafafa fa dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[0]['fullname'],
        'publishedDate' => '1999-3-9',
        'likes' => '1000000000',
        'image' => 'http://www.tournorfolk.co.uk/dinosauradventure/dinosaurmodel.jpg'
    ],

    [

        'title' => 'Syjuntan synad',
        'content' => 'Kanot-vm dolor sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[1]['fullname'],
        'publishedDate' => '2019-3-4',
        'likes' => '-2',
        'image' => 'https://1.bp.blogspot.com/-UxaLz8mY3IY/TVxaVPcvPUI/AAAAAAAAABU/t-b0MmtXQiM/s1600/Syjunta+1860-tal+001.jpg'
    ],

    [

        'title' => 'Elon Musk satsar på korsstygn',
        'content' => 'Loooooorem! sit amet consectetur,
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[2]['fullname'],
        'publishedDate' => '1203-3-7',
        'likes' => '1768',
        'image' => 'https://i.pinimg.com/originals/21/6a/bf/216abf39aad9b11ef47d68be80bda109.jpg'
    ],


    [

        'title' => 'Agneta fältskog hugger ved',
        'content' => 'Det är bättre än att fälla skog!
         Dolor sit amet consectetur
     adipisicing elit. A itaque iusto quia alias quibusdam 
     quod incidunt amet sequi. Voluptatibus ipsam nemo molestiae, 
     aliquam enim nobis dicta neque eveniet tenetur quia.',
        'author' => $authors[4]['fullname'],
        'publishedDate' => '2020-2-2',
        'likes' => '1',
        'image' => 'https://stinabloom.files.wordpress.com/2009/02/hugga-ved.jpg'
    ],

];
