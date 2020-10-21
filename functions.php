<?php

require __DIR__ . ('/data.php');




function ads($commercials)
{
    $commercial = [];

    foreach ($commercials as $commercial) : ?>
        <div class="ads"><?= $commercial['name']; ?></div>

<?php

    endforeach;
}

$cmmercial['name'] = ads($commercials);





        /* function image($images)
        {
        foreach ($images as $image) : ?>
        <img class="article-img" src="<?= $image; ?>" />
<?php
    endforeach;
}

$articleImg = image($images);
echo $images[0]['image'];
?> */