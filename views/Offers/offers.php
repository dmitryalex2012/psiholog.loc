<body class="services">

<?php
/* @var $offers array */

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
                    <?php   echo Html::a('Узнать больше', ['/offers/details'], ['class'=>'indexBtnOffers btn btn-outline-info']);
//                    echo Html::a('Узнать больше', ['/offers/details', 'value' => $ourOffer->redirect], ['class'=>'indexBtn btn btn-outline-info']);
                    ?>
                </div>

            </div>

        </div>

        <?php if ((($i % 4) == 0)): ?>                     <!-- close "div" after fourth card -->
        </div>
        <?php endif; ?>

    <?php endforeach; ?>


    <h2 class="h2Services">Направления психиатрии</h2>

</div>
