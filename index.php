<?php


require __DIR__ . ('/functions.php');
require __DIR__ . ('/data.php');




?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Fake news</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        .header {
            padding: 30px;
            display: flex;
            justify-content: center;
            background: white;
        }

        .leftcolumn {
            float: left;
            width: 75%;
        }

        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        @media screen and (max-width: 800px) {

            .leftcolumn,
            .rightcolumn {
                width: 100%;
                padding: 0;
            }
        }

        button {
            margin-top: 5px;
        }

        .article-img {
            max-width: 100%;
        }

        .fa {
            padding-right: 10px;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="./img/fakenews.png" style="height:200px;" />
    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">

                <?php usort($articles, 'sortDates') ?>
                <?php foreach ($articles as $article) : ?>
                    <?php $date = $article['publishedDate']; ?>
                    <h2>
                        <?= $article['title']; ?>
                    </h2>
                    <i> Publicerad: <?= $date ?> </i>


                    <h5><?= $article['author']; ?></h5>

                    <img class="article-img" style="height:200px;" src="<?= $article['image']; ?>">
                    <p> <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i><?= $article['likes']; ?> Likes </p>

                    <p>
                        <?= $article['content']; ?>
                    </p>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="rightcolumn">
            <div class="card">
                <h2>Om oss</h2>
                <img src="./img/sheep.png" style="height:100px;">
                <p>Fake News grundare Lamméth</p>
            </div>
            <div class="card">
                <h3>Impopular Post</h3>
                <div class="fakeimg">USA</div><br>
                <div class="fakeimg">Corona</div><br>
                <div class="fakeimg">Biljettkontrollanter</div>
            </div>
            <div class="card">
                <h3>Följ mig på linnstagram:</h3>
                <p>@nopleasedont</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <h2>Brought to you by Linnland Coroporations</h2>
    </div>

    <script>
        function myFunction(x) {
            x.classList.toggle("fa-thumbs-down");
        }
    </script>
</body>

</html>