<!--<body class="services">-->

<?php
/* @var $detailOffer array */
?>


<div class="offersDetail">

    <?php $this->params['breadcrumbs'][] = [
        'label'=> 'Услуги',
        'url'=> ['/offers/list'],
    ];
    $this->params['breadcrumbs'][] = $detailOffer['content'];

    ?>

    <div class="mainDescription">
        <h1 class="h1Services"><?php echo $detailOffer['content']; ?></h1>
    </div>

<!--    --><?php
//    echo '<pre>';
//    var_dump($detailOffer);
//    echo '</pre>';
//    ?>

</div>
