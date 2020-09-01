<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\FeedbackForm */

/* @var $doctor string */

use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\captcha\Captcha;

$this->title = 'Запись на прием';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<div class="site-contact">
    <h1 class="h1Feedback"><?= Html::encode($this->title) ?></h1>


    <?php
    echo $doctor;
    ?>




    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Спасибо за обращение. Мы свяжемся с Вами в ближайшее время.
        </div>

    <?php else: ?>

        <div class="row">

            <div class="col-xl-4 col-sm-3 col-1">
            </div>

            <div class="feedbackField col-xl-4 col-sm-6 col-10">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

<!--                    --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!--                    --><?//= $form->field($model, 'email') ?>
<!--                    --><?//= $form->field($model, 'subject') ?>
<!--                    --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'name', ['enableLabel' => false])->textInput(array('placeholder' => 'Ваше имя*', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'age', ['enableLabel' => false])->textInput(array('placeholder' => 'Возраст', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'sex', ['enableLabel' => false])->textInput(array('placeholder' => 'Пол', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'email', ['enableLabel' => false])->textInput(['placeholder' => 'Email*', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'phone', ['enableLabel' => false])->textInput(['placeholder' => 'Ваш номер телефона*', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'reason', ['enableLabel' => false])->textarea(['rows' => 3, 'placeholder' => 'Причина обращения', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'receiptDate', ['enableLabel' => false])->textInput(['placeholder' => 'Желаемые время и дата приема', 'class'=>'form-control text-center']) ?>

                    <p class="pFeedBack">Поля отмеченные <strong>*</strong> заполнять обязательно</p>


<!--                    --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-md-5">{image}</div><div class="col-md-6">{input}</div></div>',
//                    ]) ?>
                <?= $form->field($model, 'reCaptcha', ['enableLabel' => false])->widget(ReCaptcha2::className(),
                    [   'siteKey' => '6LeNwsEZAAAAAJ0bKPaY5zGyD5hwOsGN9GE2kP30', // V2
                    ]
                ) ?>


                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'feedbackBtn btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>

            <div class="col-xl-4 col-sm-2 col-1">
            </div>

        </div>

    <?php endif; ?>
</div>
