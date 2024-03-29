<body class="contact">
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\FeedbackForm */

use yii\helpers\Html;

?>

<div class="containerContacts">

    <h1 class="h1Contacts">Контакты</h1>

    <div class="weOnMap col-12 col-md-9">
        <div id="map"></div>
    </div>
    <script>
        let setLatLng = {lat: 50.52301168959253, lng: 30.50978286746775};

        function initMap() {

            /** load map with zoom 15 */
            let map = new google.maps.Map(document.getElementById('map'), {
                center: setLatLng,
                zoom: 15
            });

            /** load marker */
            let marker = new google.maps.Marker({
                position: setLatLng,
                map: map,
                title: 'Джулай Надежда Семеновна',
                label: {
                    text: "Мы здесь",
                    fontWeight: 'bold',
                    fontSize: '18px',
                },
            });
        }
    </script>

    <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5lk7r7SXnb01iASdBunyGA8wv8_1FW6k&callback=initMap">
    </script>

    <div class="ourContacts col-12 col-md-3">
        <p class="contactsHeading">ЗВОНИТЕ:</p>
        <p class="contactsInformation">+38(098)455-28-77</p>
        <p class="contactsInformation">+38(093)339-67-91</p>
        <p class="contactsInformation">+38(098)455-28-77 (viber)</p>

        <p class="contactsHeading">ПИШИТЕ:</p>
        <p class="contactsInformation">nade444@gmail.com</p>

        <p class="contactsHeading">МЫ РАБОТАЕМ:</p>
        <p class="contactsInformation">Пн-Сб: с 10 до 21</p>

        <p class="contactsHeading">ПРИЕЗЖАЙТЕ:</p>
        <p class="contactsInformation">г. Киев, ул. Героев Днепра 67</p>
        <p class="message">Пожалуйста, перезвоните заранее</p>

        <?php echo Html::a('Записаться на консультацию', ['/site/feedback'], ['class'=>'contactsBtn btn btn-success']);
        ?>

    </div>

</div>