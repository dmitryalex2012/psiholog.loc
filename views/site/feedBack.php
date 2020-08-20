<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\FeedbackForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Запись на прием';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<div class="site-contact">
    <h1 class="h1Feedback"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

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

                    <?= $form->field($model, 'name', ['enableLabel' => false])->textInput(array('placeholder' => 'Ваше имя', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'age', ['enableLabel' => false])->textInput(array('placeholder' => 'Возраст (не обязательно)', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'sex', ['enableLabel' => false])->textInput(array('placeholder' => 'Пол (не обязательно)', 'class'=>'form-control text-center')) ?>

                    <?= $form->field($model, 'email', ['enableLabel' => false])->textInput(['placeholder' => 'Email', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'phone', ['enableLabel' => false])->textInput(['placeholder' => 'Ваш номер телефона', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'reason', ['enableLabel' => false])->textarea(['rows' => 3, 'placeholder' => 'Причина обращения (не обязательно)', 'class'=>'form-control text-center']) ?>

                    <?= $form->field($model, 'receiptDate', ['enableLabel' => false])->textInput(['placeholder' => 'Желаемые время и дата приема (не обязательно)', 'class'=>'form-control text-center']) ?>


                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-md-5">{image}</div><div class="col-md-6">{input}</div></div>',
//                        'class'=>'feedbackCaptcha',
                    ]) ?>

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
