<body class="services">

<?php
/* @var $offers array */
/* @var $directions array */

use yii\helpers\Html;

?>

<div class="servicesContent">
    <div class="mainDescription">
        <h1 class="h1Services">Услуги</h1>
    </div>

    <!--    $offers {                                                           -->
    <!--        [photo] =>   "/photo/services/services1.jpg" (photo address)    -->
    <!--        [title] => "Врачебная консультация" (service title)             -->
    <!--        [content] => Service description                                -->
    <!--            }                                                           -->
    <?php $i = 0;
    foreach ($offers as $key => $item):

        /**  output 4 cards in line */
        if ((((++$i) % 4) == 1)): ?>
            <div class="row">
        <?php endif; ?>

        <div class="card-group col-12 col-md-6 col-lg-3">

            <div class="cardOffers">

                <div class="card">

                    <?= Html::a(Html::img($item->photo, ['class' => "imgOffers",'width' => "100%", 'height' => "100%"]), ['offers/offer', 'id' => $i, 'serviceType' => 'offers']);
                    ?>

                    <div class="card-body">

                        <H2 class="h2Offers">    <?php   echo $item->title; ?> </H2>

                    </div>

                </div>

            </div>

        </div>

        <!-- close "div" after fourth card -->
        <?php if ((($i % 4) == 0)): ?>
        </div>
        <?php endif; ?>

    <?php endforeach; ?>


    <h2 class="h2Services">Мы работаем с такими направлениями психотерапии</h2>

    <?php $i = 0;
    foreach ($directions as $key => $item):

        /**  output 2 cards in line **/
        if ((((++$i) % 3) == 1)): ?>
            <div class="row">
        <?php endif; ?>

        <div class="card-group col-12 col-md-4">

            <div class="cardOffers">

                <div class="card">

                    <?= Html::a(Html::img($item->photo, ['class' => "imgOffers",'width' => "100%", 'height' => "100%"]), ['/offers/offer', 'id' => $i, 'serviceType' => 'directions']);
                    ?>

                    <div class="card-body">

                        <H2 class="h2Offers">    <?php   echo $item->title; ?> </H2>

                    </div>

                </div>

            </div>

        </div>

        <!-- close "div" after fourth card-->
        <?php if ((($i % 3) == 0)): ?>
        </div>
    <?php endif; ?>

    <?php endforeach; ?>


</div>
