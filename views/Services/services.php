<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Services</h1>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->
<!--    </div>-->




<!--    <div class="container">-->
<!--             <div class="pics">-->
<!--                <div class="image">-->
<!--                    <input id="pic05" type="checkbox">-->
<!--                    <label class="certificatePhoto" for="pic05" style="background-image: -->
<!--                            url(--><?php //echo "/photo/colleague/psiholog1.jpg"; ?><!--)">-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--    </div>-->

<!--    <img class="myImg" src="--><?php //echo '/photo/certificates/id1_1.jpg'; ?><!--" alt="" width="150">-->



    <div class="card-deck">
        <?php $i = 0; ?>
        <div class="card">
            <div class="certificateImage">
                <input id=pic<?php echo $i . '"'; ?> type="checkbox">
                <label class="certificatePhoto" for=pic<?php echo $i . '"'; ?> style="background-image: url(<?php echo "/photo/colleague/1_1.jpg" ?>);">
                </label>
            </div>
        </div>

        <?php $i++; ?>
        <div class="card">
            <input id=pic<?php echo $i . '"'; ?> type="checkbox">
            <label class="certificatePhoto" for=pic<?php echo $i . '"'; ?> style="background-image: url(<?php echo "/photo/colleague/1_2.jpg" ?>);">
            </label>
        </div>

        <?php $i++; ?>
        <div class="card">
            <input id=pic<?php echo $i . '"'; ?> type="checkbox">
            <label class="certificatePhoto" for=pic<?php echo $i . '"'; ?> style="background-image: url(<?php echo "/photo/colleague/1_3.jpg" ?>);">
            </label>
        </div>
    </div>






</div>
