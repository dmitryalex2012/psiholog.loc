<?php
/* @var $detailOffer array */
/* @var $content array */

use yii\helpers\Html;

?>

<div class="offersDetail">

    <?php $this->params['breadcrumbs'][] = [
        'label'=> 'Услуги',
        'url'=> ['/offers/list'],
    ];
    $this->params['breadcrumbs'][] = $detailOffer['title'];

    ?>

    <h1 class="h1Services"><?php echo $detailOffer['title']; ?></h1>

    <div class="mainDescription">


        <div class="row">

            <div class="col-md-9 rowDetailDescription">

                <h3 class="h3DetailOffer">Описание услуги</h3>

                <?php
                foreach ($content as $value){
                    echo "<p class='pDetailOffer'>" . $value . "</p>";
                }
                ?>

            </div>

            <div class="col-md-3">

                <div class="offerDuration">
                    <h3 class="h3DetailOffer">Длительность:</h3>
                    <p class="pDetailOfferContent"><?php echo $detailOffer['duration']; ?></p>
                </div>

                <div class="offerPrice">
                    <h3 class="h3DetailOffer">Стоимость:</h3>
                    <p class="pDetailOfferContent"><?php echo $detailOffer['price']; ?></p>
                </div>

                <?php echo Html::a('Записаться на прием', ['/site/feedback', 'serviceTypeID'=>$detailOffer['id'], 'serviceType'=>$detailOffer['notes']], ['class'=>'indexBtn btnDetailOffer btn btn-success']);
                ?>

            </div>

        </div>

    </div>

</div>
