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
        <meta name="description" content="Пошив штор. Дизайн штор. Дизайн-бюро штор. Дизайн и пошив штор. Подушки. Карнизы. Жалюзи. Ролеты. Текстиль для детей. Полотенца. Постельное белье. Apero." />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="canonical" href="http://www.designburoshtor.website">
        <meta property="og:locale" content="ru_RU">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Пошив штор. Дизайн штор. Дизайн-бюро штор. Дизайн и пошив штор. Подушки. Полотенца. Постельное белье. Apero. Карнизы• жалюзи. Ролеты. Текстиль для детей">
        <meta property="og:description" content="Пошив штор. Дизайн штор. Дизайн-бюро штор. Дизайн и пошив штор. Подушки. Карнизы. Жалюзи. Ролеты. Текстиль для детей. Полотенца. Постельное белье. Apero.">
        <meta property="og:url" content="http://www.designburoshtor.website">
        <meta property="og:site_name" content="designburoshtor">
        <meta name="twitter:description" content="Пошив штор. Дизайн штор. Дизайн-бюро штор. Дизайн и пошив штор. Подушки. Карнизы. Жалюзи. Ролеты. Текстиль для детей. Полотенца. Постельное белье. Apero.">
        <meta name="twitter:title" content="Пошив штор• дизайн штор• дизайн-бюро штор• дизайн и пошив штор• подушки• полотенца• постельное белье• Apero• карнизы• жалюзи• ролеты• текстиль для детей">

        <?php $this->registerCsrfMetaTags() ?>
        <!--        <title>--><?//= Html::encode($this->title) ?><!--</title>-->
        <title><?php echo "Психолог• консультация психолога• конфиденциально"; ?></title>
        <?php $this->head() ?>



        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">



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
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'О нас',  'url' => ['/about/index']],
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
        ?>


        <?php
        NavBar::end();
        ?>

        <div class="container">
            <div class="myBreadcrumbs">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    'homeLink' => false,        // delete "Home" link in breadcrumbs
                ]) ?>
                <?= Alert::widget() ?>
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