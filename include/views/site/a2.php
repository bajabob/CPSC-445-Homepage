<?php
use yii\helpers\Html;
use yii\web\View;


$this->registerJs('
$(document).ready(function() {
    $(\'#table\').DataTable();
} );
');

?>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="intro-text">
                    <span class="name">Assignment II</span>
                    <p>Here is a quick webscrape of interests I share with my classmates. Of all my classmates, the one I share the most media types with is Wesley Vance. The top two media types I share with the entire class are Television and Web/Internet. </p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <table id="table" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Similarities</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Similarities</th>
                    </tr>
                    </tfoot>
                    <tbody>


                    <?php

                        foreach($people as $p):

                    ?>

                    <tr>
                        <td> <?= Html::a($p['person']['name'], $p['person']['url'], ['target' => '_blank']) ?> </td>

                        <?php

                            $tags = array();



                        ?>
                        <td>
                            <?php foreach($p['tags'] as $tag): ?>

                                <span class="label label-default"><?= $tag['tag'] ?></span>

                            <?php endforeach; ?>
                        </td>
                    </tr>

                    <?php
                        endforeach;
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

