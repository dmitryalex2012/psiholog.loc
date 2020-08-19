<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

/* @var $colleague array */
/* @var $colleagues object */

//$this->title = 'My Yii Application';
?>

<!--C:\Program Files (x86)\OpenServer\OSPanel\domains\psiholog.loc\web\photo\simplebox\imgs-->
<!--/photo/certificates/id1_1.jpg-->


<div class="containerDetail">

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

    <?php $biography = explode('\n', $colleague->biography ); ?>

    <div>
        <p><img class="photoDetail" src="<?php echo $colleague->photo; ?>" alt=""/></p>
<!--        <p><img src="--><?php //echo $colleague->photo; ?><!--" alt=""/></p>-->

        <p class="aboutColleague"><strong> Специализация: </strong> <?php echo ' ' . $colleague->specialization . '.' ?></p>
        <p class="aboutColleague"><strong> Методы: </strong> <?php echo ' ' . $colleague->methods . '.' ?></p>
        <p class="colleagueBiography"><strong> Биография: </strong> <?php echo $biography[0]; ?></p>

        <?php array_shift($biography);
        foreach ($biography as $value): ?>
            <p class="aboutColleagueParagraph"><?php echo $value; ?></p>
        <?php endforeach; ?>

    </div>

    <div class="detailButton">
        <?php echo Html::a('Записаться на консультацию', ['/blog/display'], ['class'=>'indexBtn btn btn-success']);
        ?>
    </div>

    <div class="certificates">
        <h3 class="h3Detail">Сертификаты</h3>


        <?php $certificates = explode(',', $colleague->certificates ); ?>





        <?php $i = 0; ?>

        <?php foreach ($certificates as $key=>$certificate):
            if ((((++$i) % 6) == 1)):                   //  output cards in 2 columns
                ?>
                <div class="row card-groupColleagues">
            <?php endif; ?>
            <div class="col-12 col-sm-4 col-md-2 card">
                <img src="<?php echo $certificate; ?>" class="card-img-top" alt="...">
            </div>
            <!--    close "row" (after each 2 columns)-->
            <?php if ((($i % 6) == 0)): ?>
            </div>

        <?php endif; ?>
        <?php endforeach;
        if (($i % 6) != 0)     { echo  "</div>";    }   // it's necessary to close "row" by "/div" when "col" are odd
        ?>

    </div>

</div>