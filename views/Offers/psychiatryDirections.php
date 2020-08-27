<!--<body class="services">-->

<?php
/* @var $psychiatryDirections array */
?>


<div class="offersDetail">

    <?php $this->params['breadcrumbs'][] = [
        'label'=> 'Услуги',
        'url'=> ['/offers/list'],
    ];
    $this->params['breadcrumbs'][] = $psychiatryDirections[0]['content'];

    ?>

    <div class="mainDescription">
        <h1 class="h1Services"><?php echo $psychiatryDirections[0]['content'] ?></h1>
    </div>


</div>
