<?php

/* @var $this yii\web\View */

use yii\helpers\Html;


/* @var $colleagues object */

//$this->title = 'My Yii Application';
?>

<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>About</h1>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->

    <h2 class="h2About">Наша команда</h2>





<!--    <div class="row card-groupColleagues">-->
<!--        <div class="col-md-6 card">-->
<!--            <img src="--><?php //echo "/photo/colleague/psiholog1.jpg" ?><!--" class="card-img-top" alt="...">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">Название карточки</h5>-->
<!--                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
<!--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6 card">-->
<!--            <img src="..." class="card-img-top" alt="...">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title">Название карточки</h5>-->
<!--                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>-->
<!--                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


<?php
//echo '<pre>';
//var_dump($colleagues);
//?>


    <?php $i = 0; ?>

    <?php foreach ($colleagues as $key=>$colleague):
        if ((((++$i) % 4) == 1)):                   //  output cards in 2 columns
    ?>
        <div class="row card-groupColleagues">
        <?php endif; ?>

            <div class="col-12 col-md-3 card">

                <img src="<?php echo $colleague->photo; ?>" class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $colleague->name; ?></h5>
                    <p class="card-text"><?php echo "Специализация: " . $colleague->specialization; ?></p>
                    <p class="card-text"><?php echo "Методы: " . $colleague->methods; ?></p>
                </div>

                <div class="card-footer">
                    <?php echo Html::a("Подробнее", ['/about/detail', 'colleagueID' => $colleague->id], ['class'=>'indexBtnAbout btn btn-outline-info']);
                    ?>
                </div>

            </div>

        <?php if ((($i % 4) == 0)): ?>
        </div>                                      <!-- close "row" (after each 2 columns) -->
        <?php endif; ?>

    <?php endforeach;
    if (($i % 4) != 0)     { echo  "</div>";    }   // it's necessary to close "row" by "/div" when "col" are odd
    ?>


</div>