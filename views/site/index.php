<?php

/* @var $this yii\web\View */

use yii\helpers\Html; ?>


<div class="site-indexMain">

    <div class="indexTextContent">

        <h2 class="h2Index">Профессиональная психологическая помощь в Киеве</h2>

    </div>

    <div class="myCard bg-dark text-white">

        <img src="<?php echo '/photo/index/indexBackground.jpg' ?>" class="card-img" alt="...">

        <div class="card-img-overlay">

            <div class="row">

                <div class="col-7">

                    <h1 class="card-titleH1">Джулай Надежда Мироновна</h1>
                    <h2 class="card-titleH2">Врач - психотерапевт</h2>

                    <div class="siteSlogan">

                        <p class="pIndexFirstParagraph">Моя профессия – не только лечить болезни, но и помогать людям
                        понимать причины своих поступков и чувств, находить ошибочные привычные стили поведения,
                        несущие в жизнь неудачи; лучше узнавать себя. А также – справляться со своими страхами и
                            тревогами, учиться быть в гармонии с собой, учиться быть по-настоящему счастливыми.
                        </p>

                        <p class="pIndexSecondParagraph"><b>"</b>Самая интересная поверхность на Земле – это человеческое лицо,
                        наизагадочнейшая глубина – в океане человеческой души, а самая мудрая книга – это история
                            человеческой судьбы.<b>"</b>
                        </p>
                        <p class="text-right">(К. Кастанеда)</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php echo Html::a('Записаться на прием', ['/site/feedback', 'id'=>'1'], ['class'=>'indexBtn btn btn-success']);
    ?>

</div>
