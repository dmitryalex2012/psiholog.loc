<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Colleagues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colleagues-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'listMethods')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriptionMethods')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hobbies')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titleAdditional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descriptionAdditional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'certificates')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
