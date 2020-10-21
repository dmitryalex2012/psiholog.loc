<!--<body class="services">-->

<?php
/* @var $detailOffer array */

use yii\helpers\Html;

?>


<div class="offersDetail">

    <?php $this->params['breadcrumbs'][] = [
        'label'=> 'Услуги',
        'url'=> ['/offers/list'],
    ];
    $this->params['breadcrumbs'][] = $detailOffer['content'];

    ?>

    <h1 class="h1Services"><?php echo $detailOffer['content']; ?></h1>

    <div class="mainDescription">




    </div>


    <?php echo Html::a('Записаться на прием', ['/site/feedback', 'method'=>$detailOffer['id']], ['class'=>'indexBtn btn btn-success']);
    ?>

<!--    --><?php
//    echo '<pre>';
//    var_dump($detailOffer);
//    echo '</pre>';
//    ?>

</div>
