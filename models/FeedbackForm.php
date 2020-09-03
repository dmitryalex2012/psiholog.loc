<?php

namespace app\models;

use himiklab\yii2\recaptcha\ReCaptchaValidator;
use Yii;
use yii\base\Model;

/**
 * FeedbackForm is the model behind the contact form.
 */
class FeedbackForm extends Model
{
    public $name;
    public $age;
    public $sex;
    public $email;
    public $phone;
    public $reason;
    public $receiptDate;
//    public $verifyCode;
    public $reCaptcha;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone'], 'required', 'message'=>'Не заполнено поле'],
            // email has to be a valid email address
            ['email', 'email', 'message'=>'Некорректный e-mail'],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
            [['reCaptcha'], ReCaptchaValidator::className(), 'secret' => '6LeNwsEZAAAAAM21dhz5in7PJkxz_ut8Ojay4W0W', 'uncheckedMessage' => 'Please confirm that you are not a bot.'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        $session = Yii::$app->session;
        $session->open();

        if (!$session->has('order')) {

            $messageContent = "Доктор: " . "-" . "\r\n";
            $messageContent = $messageContent . "Услуга: " . "-" . "\r\n";

        } else {

            $order = $session->get('order');

            $messageContent = "Доктор: " . $order['doctor'] . "\r\n";
            $messageContent = $messageContent . "Услуга: " . $order['method'] . "\r\n";
        }

        $messageContent = $messageContent . "Сообщеие заказчика: " . $this->sex;
//        . "\r\n"

        $session->close();
        Yii::$app->session->destroy();

        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo('DmitryAlex2012@gmail.com')
            //                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setFrom($email)
            //                ->setReplyTo([$this->email => $this->name])
                ->setSubject($this->name)
                ->setTextBody($messageContent)
                ->send();

//            $reply = "Здравствуйте." . "\r\n" . "Номер Вашего заказа:" . "." . "\n" . "\r\n" .
//                "Состав заказа:" . "\n" . "\r\n" . "\r\n" .
//                "Спасибо за то, что выбрали нас. Наш дизайнер свяжется с Вами в ближайшее время.";
//            Yii::$app->mailer->compose()
//                ->setTo(['DmitryAlex2012@gmail.com'])      // send mails
//                ->setFrom([$email])
//                ->setSubject($this->name)
//                ->setTextBody($textBody)
//                ->send();
            return true;
        }
        return false;
    }
}
