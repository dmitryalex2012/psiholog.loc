<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Display</h1>-->
<!--    </div>-->

    <div class="body-content">


<!--        <video width="320" height="240" controls="controls" poster="/web/video/photo.jpg">-->
<!--            <source src="/web/video/movie.mp4" type='video/mp4"'>-->
<!--            <source src="/web/video/movie.ogv" type='video/ogg"'>-->
<!--            Your browser does not support the video tag.-->
<!--        </video>-->

                <video width="320" height="240" controls="controls">
                    <source src="/web/video/mountvideo.ogv" type='video/ogg; codecs="theora, vorbis"'>
<!--                    <source src=" --><?php //echo '/web/video/mountvideo.ogv' ?><!--" type='video/ogg"'>-->
                    Your browser does not support the video tag.
                </video>


    </div>
</div>
