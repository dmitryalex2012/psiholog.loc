<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Коллеги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colleagues-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить коллегу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'photo',
            'specialization',
//            'degree',
            'listMethods',
//            'descriptionMethods',
            'education',
            'hobbies',
//            'titleAdditional',
//            'descriptionAdditional',
//            'certificates',
            //'notes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
