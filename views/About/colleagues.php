<?php

/* @var $this yii\web\View */
/* @var $colleagues object */

use yii\helpers\Html;
?>

<div class="site-index">

    <h2 class="h2About">Немного о нас</h2>

    <?php $i = 0; ?>

    <?php foreach ($colleagues as $key=>$colleague):

        /** Output cards in 2 columns */
        if ((((++$i) % 2) == 1)):

    ?>
        <div class="row card-groupColleagues">
        <?php endif; ?>

            <div class="col-12 col-md-6 cardColleagues">

                <div class="card">

                    <img src="<?php echo $colleague->photo; ?>" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $colleague->name; ?></h5>
                        <p class="card-text"><?php echo "Специализация: " . $colleague->specialization; ?></p>
                    </div>

                    <div class="card-footer">
                        <?php echo Html::a("Подробнее", ['/about/detail', 'colleagueID' => $colleague->id], ['class'=>'indexBtnAbout btn btn-outline-info']);
                        ?>
                    </div>

                </div>

            </div>
        <?php
        /** Close "row" (after each 2 columns) */
        if ((($i % 2) == 0)): ?>
        </div>
        <?php endif; ?>

    <?php endforeach;
    /** It's necessary to close "row" by "/div" when "col" are odd */
    if (($i % 2) != 0){
        echo  "</div>";
    }
    ?>

</div>