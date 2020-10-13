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

    <!--    $offers {                                                                    -->
    <!--        [photo] =>   "/photo/services/services1.jpg"       (photo address)         -->
    <!--        [content] => "Врачебная консультация"  (service description)               -->
    <!--              }                                                                    -->
    <?php $i = 0;
    foreach ($offers as $key => $item):

        if ((((++$i) % 4) == 1)): ?>                        <!--  output 2 cards in line -->
            <div class="row">
        <?php endif; ?>

        <div class="card-group col-12 col-md-6 col-xl-3">

            <div class="card">

                <img src="<?php echo $item->photo; ?>" class="cardOffers card-img-top" alt="100%">

                <div class="card-img-overlay">

                    <H2 class="h2Offers">    <?php   echo $item->content; ?> </H2>


                    <?php   echo Html::a('Узнать больше', ['/offers/offer', 'id' => $i], ['class'=>'indexBtnOffers btn btn-outline-info']);
                    ?>

                </div>

            </div>

        </div>

        <?php if ((($i % 4) == 0)): ?>                     <!-- close "div" after fourth card -->
        </div>
        <?php endif; ?>

    <?php endforeach; ?>


<!--    <h2 class="h2Services">Направления психиатрии</h2>-->
<!---->
<!--    --><?php //$i = 0;
//    foreach ($directions as $key => $item):
//
//        // output 2 cards in line
//        if ((((++$i) % 4) == 1)): ?>
<!--            <div class="row">-->
<!--        --><?php //endif; ?>
<!---->
<!--        <div class="card-group col-12 col-md-6 col-xl-3">-->
<!---->
<!--            <div class="card">-->
<!---->
<!--                <img src="--><?php //echo $item->photo; ?><!--" class="cardOffers card-img-top" alt="100%">-->
<!---->
<!--                <div class="card-img-overlay">-->
<!---->
<!--                    <H2 class="h2Offers">    --><?php //  echo $item->content; ?><!-- </H2>-->
<!---->
<!--                    --><?php //  echo Html::a('Узнать больше', ['/offers/direction', 'id' => $i], ['class'=>'indexBtnOffers btn btn-outline-info']);
//                    ?>
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
        <!-- close "div" after fourth card -->
<!--        --><?php //if ((($i % 4) == 0)): ?>
<!--        </div>-->
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //endforeach; ?>


</div>
