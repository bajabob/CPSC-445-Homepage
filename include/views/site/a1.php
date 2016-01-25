<?php
use yii\helpers\Html;
?>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="intro-text">
                    <span class="name">Assignment I</span>
                    <p>Here is a collection of my interests sorted by higher-level media into specific media</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 text-center">
                <h1>News</h1>
                <hr class="star-light">

                <h3>Web</h3>
                <?= Html::img(['/img/a1/news/web/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/news/web/2.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Magazine</h3>
                <?= Html::img(['/img/a1/news/magazine/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/news/magazine/2.png'], ['class' => 'img-rounded img-responsive']) ?>
            </div>

            <div class="col-md-4 text-center">
                <h1>Television</h1>
                <hr class="star-light">

                <h3>Drama</h3>
                <?= Html::img(['/img/a1/television/drama/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/television/drama/2.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Reality</h3>
                <?= Html::img(['/img/a1/television/reality/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/television/reality/2.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/television/reality/3.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Science Fiction</h3>
                <?= Html::img(['/img/a1/television/scifi/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/television/scifi/2.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Sports</h3>
                <?= Html::img(['/img/a1/television/sports/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/television/sports/2.png'], ['class' => 'img-rounded img-responsive']) ?>
            </div>

            <div class="col-md-4 text-center">
                <h1>Music</h1>
                <hr class="star-light">

                <h3>Indie/Alternative</h3>
                <?= Html::img(['/img/a1/music/indie/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/music/indie/2.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Country</h3>
                <?= Html::img(['/img/a1/music/country/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/music/country/2.png'], ['class' => 'img-rounded img-responsive']) ?>

                <h3>Electronic</h3>
                <?= Html::img(['/img/a1/music/electronic/1.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/music/electronic/2.png'], ['class' => 'img-rounded img-responsive']) ?>
                <?= Html::img(['/img/a1/music/electronic/3.png'], ['class' => 'img-rounded img-responsive']) ?>

            </div>


        </div>
    </div>
</header>

