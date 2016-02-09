<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CSCE 445 @ Texas A&M University">
    <meta name="author" content="Bob Timm">

    <title>Bob Timm</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/freelancer.css" rel="stylesheet">
    <link href="http://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <?php $this->head() ?>

</head>

<body id="page-top" class="index">

<?php $this->beginBody() ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= Html::a('Bob Timm', ['site/index'], ['class' => 'navbar-brand']) ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll"><?= Html::a('Assignment I', ['site/a1']) ?></li>
                    <li class="page-scroll"><?= Html::a('Assignment II', ['site/a2']) ?></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<?= $content ?>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">

                    <div class="footer-col col-md-3">
                        <h3>Site Source</h3>
                        <p><a href="https://github.com/bajabob/CPSC-445-Homepage" class="btn btn-lg btn-primary btn-block btn-green" target="_blank">GitHub</a></p>
                    </div>

                    <div class="footer-col col-md-offset-1 col-md-4">
                        <h3>Texas A&M University</h3>
                        <p>Robert (Bob) Timm<br><?= Html::a('CSCE 445, Dr. Shipman', 'http://www.csdl.tamu.edu/~shipman/courses/cnm/home.html', ['class' => 'btn btn-lg btn-block btn-primary', 'target' => '_blank']) ?></p>
                    </div>

                    <div class="footer-col col-md-offset-1 col-md-3">
                        <h3>Licenses</h3>
                        <p><a href="https://github.com/BlackrockDigital/startbootstrap-freelancer" class="btn btn-lg btn-primary btn-block" target="_blank">Start Bootstrap</a></p>
                        <p><a href="https://github.com/yiisoft/yii2" class="btn btn-lg btn-primary btn-block" target="_blank">Yii 2 Framework</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Robert Timm 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



<?php $this->endBody() ?>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/cbpAnimatedHeader.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/freelancer.js"></script>

<script src="http://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
</body>

<?php $this->endPage() ?>
</html>
