<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Услуги профессионального психолога, психотерапевта. Джулай Надежда Мироновна. Более 20 лет практики. Полная конфиденциальность. Широкий спектр направлений психотерапии. Звоните +38(098)455-28-77." />

        <meta name="keywords"  content="психолог, психотерапевт, психология, психология отношений, психология человека, психология мужчин, практическая психология, психология счастливой жизни, гештальт психология, детская психология, психология личности, лекции по психологии, социальная психология, психология общения, женская психология, психолог онлайн, психологическая помощь, онлайн психолог, семейный психолог, детский психолог, консультация психолога, психологическая помощь онлайн, помощь психолога, консультация психолога онлайн, помощь психолога онлайн, услуги психолога, групповая психотерапия, консультация психолога цена" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="canonical" href="http://www.designburoshtor.website">        <!-- Need to insert!!!!!  -->
        <meta property="og:locale" content="ru_RU">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Услуги профессионального психолога, психотерапевта. Джулай Надежда Мироновна. Психолог, психотерапевт, психология, психология отношений, психология человека, психология мужчин, практическая психология, психология счастливой жизни, гештальт психология, детская психология, психология личности, лекции по психологии, социальная психология, психология общения, женская психология, психолог онлайн, психологическая помощь, онлайн психолог, семейный психолог, детский психолог, консультация психолога, психологическая помощь онлайн, помощь психолога, консультация психолога онлайн, помощь психолога онлайн, услуги психолога, групповая психотерапия, консультация психолога цена.">
        <meta property="og:description" content="Услуги профессионального психолога, психотерапевта. Джулай Надежда Мироновна. Психолог, психотерапевт, психология, психология отношений, психология человека, психология мужчин, практическая психология, психология счастливой жизни, гештальт психология, детская психология, психология личности, лекции по психологии, социальная психология, психология общения, женская психология, психолог онлайн, психологическая помощь, онлайн психолог, семейный психолог, детский психолог, консультация психолога, психологическая помощь онлайн, помощь психолога, консультация психолога онлайн, помощь психолога онлайн, услуги психолога, групповая психотерапия, консультация психолога цена.">
        <meta property="og:url" content="http://www.designburoshtor.website">   <!-- Need to insert!!!!!  -->
        <meta property="og:site_name" content="designburoshtor">
        <meta name="twitter:description" content="Услуги профессионального психолога, психотерапевта. Джулай Надежда Мироновна. Психолог, психотерапевт, психология, психология отношений, психология человека, психология мужчин, практическая психология, психология счастливой жизни, гештальт психология, детская психология, психология личности, лекции по психологии, социальная психология, психология общения, женская психология, психолог онлайн, психологическая помощь, онлайн психолог, семейный психолог, детский психолог, консультация психолога, психологическая помощь онлайн, помощь психолога, консультация психолога онлайн, помощь психолога онлайн, услуги психолога, групповая психотерапия, консультация психолога цена.">
        <meta name="twitter:title" content="Услуги профессионального психолога• психотерапевта•Джулай Надежда Мироновна• психолог• психотерапевт• психология• психология отношений• психология человека• психология мужчин• практическая психология• психология счастливой жизни• гештальт психология• детская психология• психология личности• лекции по психологии• социальная психология• психология общения• женская психология• психолог онлайн• психологическая помощь• онлайн психолог• семейный психолог• детский психолог• консультация психолога• психологическая помощь онлайн• помощь психолога• консультация психолога онлайн• помощь психолога онлайн• услуги психолога• групповая психотерапия• консультация психолога цена.">

        <?php $this->registerCsrfMetaTags() ?>
        <!--        <title>--><?//= Html::encode($this->title) ?><!--</title>-->
        <title><?php echo "Психолог•услуги психолога•конфиденциально"; ?></title>
        <?php $this->head() ?>

        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Great+Vibes&family=Satisfy&display=swap" rel="stylesheet">

        <link rel="shortcut icon" href="/web/photo/common/favicon.ico" />

    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//            'brandLabel' => "Psiholog",
//        'brandUrl' => Yii::$app->homeUrl,
//            'brandLabel' => Html::img(Url::to('@web/photo/common/logo.jpg'), ['alt' => '', 'class' => 'img-responsive']),
//            'options' => [
//                'class' => 'navbar-inverse navbar-fixed-top',
//            ],
        ]);
        try {
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Главная', 'url' => ['/site/index']],
                    ['label' => 'О нас', 'url' => ['/about/index']],
                    ['label' => 'Услуги', 'url' => ['/offers/list']],
                    ['label' => 'Галерея', 'url' => ['/gallery/index']],
                    //                ['label' => 'Видео', 'url' => ['/video/videos']],
                    //                ['label' => 'Блог', 'url' => ['/blog/display']],
                    ['label' => 'Контакты', 'url' => ['/contacts/load']],


                    //                ['label' => 'Блог',  'url' => ['/cart/index'], 'linkOptions' => ['class' => 'classCart']],

                    //            Yii::$app->user->isGuest ? (
                    //            ['label' => 'Login', 'url' => ['/site/login']]
                    //            ) : (
                    //                '<li>'
                    //                . Html::beginForm(['/site/logout'], 'post')
                    //                . Html::submitButton(
                    //                    'Logout (' . Yii::$app->user->identity->username . ')',
                    //                    ['class' => 'btn btn-link logout']
                    //                )
                    //                . Html::endForm()
                    //                . '</li>'
                    //            )
                ],
            ]);
        } catch (Exception $e) {
        }
        ?>


        <?php
        NavBar::end();
        ?>

        <div class="container">
            <div class="myBreadcrumbs">
                <?php try {
                    echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'homeLink' => false,        // delete "Home" link in breadcrumbs
                    ]);
                } catch (Exception $e) {
                } ?>
                <?php try {
                    Alert::widget();
                } catch (Exception $e) {
                } ?>
            </div>
            <?= $content ?>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="containerLogo col-lg-8 col-md-9 col-9">
                    <p>Психологическая помощь. Джулай Надежда Мироновна &copy; 2000-2021</p>
                </div>
                <div class="containerRef col-lg-4 col-md-3 col-3">
                    <a href="https://www.facebook.com/nadiyadzhulai" target="_blank">   <img src="<?php echo "/photo/common/facebook1.png" ?>" alt=""/></a>
                    <a href="https://www.instagram.com/nadiyadzhulaik" target="_blank"><img src="<?php echo "/photo/common/inst1.png" ?>" alt=""/></a>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
    </html>
<?php $this->endPage() ?>