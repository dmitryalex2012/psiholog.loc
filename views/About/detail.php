<?php

/* @var $this yii\web\View */
/* @var $colleague array */
/* @var $colleagues object */

//$this->title = 'My Yii Application';
?>

<div class="containerDetail">

<!--    <div class="jumbotron">-->
<!--        <h1>About</h1>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->


    <?php $this->params['breadcrumbs'][] = [
        'label'=> 'О нас',
        'url'=> ['/about/index'],
    ];
    $this->params['breadcrumbs'][] = $colleague->specialization . ' ' . $colleague->name;

    ?>

    <h2 class="h2AboutDetail"><?php echo $colleague->name; ?></h2>

<?php
//echo '<pre>';
//var_dump($colleague);
//?>


<!--    --><?php //$i = 0; ?>
<!---->
<!--    --><?php //foreach ($colleagues as $key=>$colleague):
//        if ((((++$i) % 4) == 1)):                   //  output cards in 2 columns
//            ?>
<!--        <div class="row card-groupColleagues">-->
<!--        --><?php //endif; ?>
<!--            <div class="col-12 col-md-3 card">-->
<!--                <img src="--><?php //echo $colleague->photo; ?><!--" class="card-img-top" alt="...">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">--><?php //echo $colleague->name; ?><!--</h5>-->
<!--                    <p class="card-text">--><?php //echo "Специализация: " . $colleague->specialization; ?><!--</p>-->
<!--                    <p class="card-text">--><?php //echo "Методы: " . $colleague->methods; ?><!--</p>-->
<!--                    --><?php //echo Html::a("Подробнее", ['/about/detail', 'value' => $colleague->id], ['class'=>'indexBtnAbout btn btn-outline-info']);
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        --><?php //if ((($i % 4) == 0)): ?>
<!--        </div>-->
                                      <!-- close "row" (after each 2 columns) -->
<!--    --><?php //endif; ?>
<!--    --><?php //endforeach;
//    if (($i % 4) != 0)     { echo  "</div>";    }   // it's necessary to close "row" by "/div" when "col" are odd
//    ?>


</div>