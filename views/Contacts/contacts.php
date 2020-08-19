<body class="contact">
<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
?>

<div class="containerContacts">

    <h1 class="h1Contacts">Контакты</h1>

    <div class="weOnMap col-12 col-md-9">
        <div id="map"></div>
    </div>
    <script>
        let setLatLng = {lat: 50.466282, lng: 30.615236};

        function initMap() {
            let map = new google.maps.Map(document.getElementById('map'), { // load map with zoom 15
                center: setLatLng,
                zoom: 15
            });
            let marker = new google.maps.Marker({                           // load marker
                position: setLatLng,
                map: map,
                title: 'Дизайн-бюро "Мануфактура"',
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
        <p class="contactsInformation">+38(093)339-67-91</p>
        <p class="contactsInformation">+38(098)455-28-77 (viber)</p>

        <p class="contactsHeading">ПИШИТЕ:</p>
        <p class="contactsInformation">snn.manufactura@gmail.com</p>

        <p class="contactsHeading">МЫ РАБОТАЕМ:</p>
        <p class="contactsInformation">Пн-Пт: с 9 до 18</p>
        <p class="contactsInformation">Пн-Пт: с 10 до 17</p>
        <p class="contactsInformation">Пн-Пт: с 10 до 14</p>

        <p class="contactsHeading">ПРИЕЗЖАЙТЕ:</p>
        <p class="contactsInformation">г. Киев, ул. , оф. </p>
<!--        <p class="contactsInformation">Пожалуйста, перезвоните заранее</p>-->

        <?php echo Html::a('Записаться на консультацию', ['/blog/display'], ['class'=>'contactsBtn btn btn-success']);
        ?>

    </div>

</div>