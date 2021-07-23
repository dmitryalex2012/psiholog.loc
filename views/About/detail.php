<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

/* @var $colleague array */
/* @var $colleagues object */
/* @var $certificates array */

?>

<div class="containerDetail">

    <?php $this->params['breadcrumbs'][] = [
        'label' => 'О нас',
        'url' => ['/about/index'],
    ];
    $this->params['breadcrumbs'][] = $colleague->name;
    ?>

    <h2 class="h2AboutDetail"><?php echo $colleague->name; ?></h2>
    <h3 class="h3AboutDetail"><?php echo $colleague->degree; ?></h3>

    <?php $education = explode('\n', $colleague->education);
    $listMethods = explode('\n', $colleague->listMethods);
    ?>

    <div>
        <p><img class="photoDetail" src="<?php echo $colleague->photo; ?>" alt=""/></p>
        <p class="colleagueDescription"><strong> Образование: </strong></p>
        <?php foreach ($education as $value): ?>
            <p class="aboutColleagueParagraph"><?php echo $value; ?></p>
        <?php endforeach; ?>

        <?php if ($colleague->id === 2):
            ?>
        <p class="colleagueDescription"><strong> О себе: </strong></p>
        <?php else:
            ?>
        <p class="colleagueDescription"><strong> Методы: </strong></p>
        <?php endif;
        ?>
        <?php foreach ($listMethods as $value): ?>
            <p class="aboutColleagueParagraph"><?php echo $value; ?></p>
        <?php endforeach; ?>

    </div>


    <div class="detailButton">
        <?php echo Html::a('Записаться на прием', ['/site/feedback', 'id' => $colleague->id],
            ['class' => 'indexBtn btn btn-success']);
        ?>
    </div>


    <?php if (!empty($colleague->certificates)): ?>

        <div class="certificates">
            <h3 class="h3Detail">Сертификаты</h3>

            <?php $certificates = explode(',', $colleague->certificates); ?>

            <?php $i = 0; ?>

            <?php foreach ($certificates as $key => $certificate):
                /** output cards in 6 columns */
                if ((((++$i) % 6) == 1)):
                    ?>
                    <div class="row card-groupColleagues">
                <?php endif; ?>

                <div class="col-12 col-sm-4 col-md-2 card">
                    <input id=pic<?php echo $i . '"'; ?> type="checkbox">
                    <label class="certificatePhoto" for=pic<?php echo $i . '"'; ?>
                           style="background-image: url(<?php echo $certificate ?>);">
                    </label>
                </div>

                <!--    close "row" (after each 6 columns)-->
                <?php if ((($i % 6) == 0)): ?>
                </div>
            <?php endif; ?>
            <?php endforeach;

            if (($i % 6) != 0) {
            /** it's necessary to close "row" by "/div" when "col" are odd */
                echo "</div>";
            }
            ?>

        </div>

    <?php endif; ?>

</div>