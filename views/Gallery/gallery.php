<?php

///* @var $this yii\web\View */
/* @var $gallery array */
///* @var $colleagues object */

//$this->title = 'My Yii Application';
?>

<div class="containerGallery">

<!--    --><?php
//    echo '<pre>';
//    print_r($gallery);
//    echo '</pre>';
//    ?>

    <div class="mainGallery">

        <?php
        $cardsGroupQuantity = count($gallery);
        ?>

        <?php
        $cards = 0;
        foreach($gallery as $key => $item):
        if (($cards % 2) === 0):
        ?>
            <div class="row">
        <?php endif; ?>

                <div class="col-12 col-lg-6">

                    <h3><?php echo $item->title; ?></h3>                 <!-- output title photos group -->

                    <!-- Make array with photo addresses and count photo quantity. $gallery[photoAddress] contains -->
                    <!--   relative path to photo. Relative paths is divided by "," each from other -->
                    <?php
                    $photoAddress = (explode(",",$item->photoAddress));
                    $quantity = count(explode(",",$item->photoAddress));
                    ?>

                    <div id="carouselExampleInterval<?php echo $item->id; ?>" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php for ($i = 0; $i < $quantity; $i++): ?>
                                <li data-target="#carouselExampleIndicators1<?php echo $item->id; ?>"
                                    data-slide-to="<?php echo $i; ?>" <?php if ($i === 0) { ?> class="active" <?php } ?>>
                                </li>
                            <?php endfor; ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php for ($i = 0; $i < $quantity; $i++): ?>
                                <div class="carousel-item <?php if ($i === 0) { ?> active <?php } ?>" data-interval="10000000">
                                    <img src="<?php echo $photoAddress[$i]; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endfor; ?>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleInterval<?php echo $item->id; ?>" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval<?php echo $item->id; ?>" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>

                </div>

        <?php if (($cards % 2) === 1): ?>
            </div>
        <?php endif;
        $cards++;
        endforeach;
        ?>

    <!-- it's necessary to add '</div>' for close 'row' when quantity cards are odd -->
        <?php if (($cards % 2) === 1) { echo '</div>';}?>

    </div>

</div>