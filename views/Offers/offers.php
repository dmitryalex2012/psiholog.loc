<body class="services">

<?php
/* @var $offers array */
?>
<div class="servicesContent">
    <div class="mainDescription">
        <h1 class="h1Services">Услуги</h1>
    </div>

    <!--    $services {                                                                    -->
    <!--        [photo] =>   "/photo/services/services1.jpg"       (photo address)         -->
    <!--        [content] => "Врачебная консультация"  (service description)               -->
    <!--              }                                                                    -->
    <?php $i = 0;
    foreach ($offers as $key => $item):
        if ((((++$i) % 2) == 1)): ?>                        <!--  output 4 cards in line -->
            <div class="row">
        <?php endif; ?>
        <div class="card-group col-12 col-lg-6 col-xl-6">
            <div class="card">
                <img src="<?php echo $item->photo; ?>" class="card-img-top" alt="100%">
                <div class="card-body">
    <!--                <p class="card-text">--><?php //echo $item->content; ?><!--</p>-->
                </div>
            </div>
        </div>
        <?php if ((($i % 2) == 0)): ?>                     <!-- close "div" after fourth card -->
        </div>
    <?php endif; ?>
    <?php endforeach; ?>

</div>
