<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>


<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Display</h1>-->
<!--    </div>-->

    <div class="body-content">

        <video width="320" height="240" controls="controls"  poster="<?php echo '/video/photo.jpg' ?>">
            <source src="<?php echo '/video/movie.ogv' ?>" type='video/ogg'>
            <source src="<?php echo '/video/movie.mp4' ?>" type='video/mp4'>
            <source src="<?php echo '/video/movie.webm' ?>" type='video/webm'>
            Your browser does not support the video tag.
        </video>

        <audio controls>
            <source src="<?php echo '/audio/Nikalaev.ogg' ?>" type="audio/ogg; codecs=vorbis">
            <source src="<?php echo '/audio/Nikalaev.mp3' ?>" type="audio/mpeg">
            Тег audio не поддерживается вашим браузером.
<!--            <a href="--><?php //echo '/audio/Nikalaev.mp3' ?><!--">Скачайте музыку</a>.-->
        </audio>

    </div>
</div>
