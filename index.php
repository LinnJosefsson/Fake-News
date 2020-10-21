<?php

declare(strict_types=1);


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

        /* Add a gray background color with some padding */
        body {
            font-family: Arial;
            padding: 20px;
            background: #f1f1f1;
        }

        /* Header/Blog Title */
        .header {
            padding: 30px;
            display: flex;
            justify-content: center;
            background: white;
        }

        /* Create two unequal columns that floats next to each other */
        /* Left column */
        .leftcolumn {
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        /* Fake image */
        /*  .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
        }*/

        /* Add a card effect for articles */
        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Footer */
        .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            margin-top: 20px;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
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
            width: 100%;
        }

        .ads {
            padding: 1px;
            width: 300px;
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
                <?php foreach ($articles as $article) : ?>
                    <h2>
                        <?= $article['title']; ?>
                    </h2>

                    <!-- funkar ej -->
                    <h5><?= $article['author']; ?></h5>
                    <!-- funkar ej ^^ -->

                    <!-- <img class="article-img" style="height:200px;"><?= $articleImg; ?> -->

                    <p><?= $article['likes']; ?> Likes</p>
                    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                    <p>
                        <?= $article['content']; ?>
                    <?php endforeach; ?>

                    <h2 style="color: hotpink;">
                        <?php require __DIR__ . '/functions.php';
                        echo $commercial['name']; ?>
                    </h2>

            </div>
        </div>




        <div class="rightcolumn">
            <div class="card">
                <h2>Om oss</h2>
                <img src="./img/sheep.png" style="height:100px;">
                <p>Linnlands Nytts grundare Lamméth</p>
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