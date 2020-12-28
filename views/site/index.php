<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';

use yii\helpers\Html; ?>


<div class="site-index">

<!--    <div class="jumbotron">-->
<!--        <h1>Index page!!!</h1>-->
<!--    </div>-->
<!---->
<!--    <div class="body-content">-->
<!--    </div>-->

<!--    --><?//= Html::a("Статья", ['/blog/display', 'class'=>'aIndex']); ?>

<!--    Практикующий психолог Джулай Надежда Мироновна-->


    <div class="myCard bg-dark text-white">
        <img src="<?php echo '/photo/common/indexBackground.jpg' ?>" class="card-img" alt="...">
        <!--        <img src="--><?php //echo '/photo/common/indexBackground.jpg' ?><!--" class="fonPhoto" alt="...">-->
        <div class="card-img-overlay">
            <div class="row">
                <div class="col-7">
                    <h1 class="card-titleH1">Джулай Надежда Мироновна</h1>
                    <h2 class="card-titleH2">Психиатр, психотерапевт</h2>
                    <div class="siteSlogan">
                        <p class="pIndexFirstParagraph">"Я – врач-психотерапевт. Моя профессия – не только лечить болезни, но и помогать людям
                        понимать причины своих поступков и чувств, находить ошибочные привычные стили поведения,
                        несущие в жизнь деструкцию; лучше узнавать себя. А также – справляться со своими страхами и
                            тревогами, учиться быть в гармонии с собой, учиться быть по-настоящему счастливыми.
                        </p>
                        <p class="pIndexSecondParagraph">Со мной Вы увидите, что самая интересная поверхность на Земле – это человеческое лицо,
                        наизагадочнейшая глубина – в океане человеческой души, а самая мудрая книга – это история
                        человеческой судьбы."
                        </p>
<!--                        <br>-->
                    </div>
<!--                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                </div>
            </div>
        </div>
    </div>
<!--    <img class="fonPhoto" src="--><?php //echo '/photo/common/indexBackground.jpg' ?><!-- " alt="...">-->

    <?php echo Html::a('Записаться на прием', ['/site/feedback', 'id'=>'1'], ['class'=>'indexBtn btn btn-success']);
    ?>

    <div class="indexTextContent">
        <h2 class="h2Index">Профессиональная психологическая помощь в Киеве</h2>

        <p class="textIndex">
            Для многих из нас быть сильным в современном обществе - это вопрос жизни и смерти, мы постоянно чего-то добиваемся,
            постоянно приходится отстаивать свое мнение и свою личную территорию. Повсюду нас окружают препятствия,
            которые нужно преодолеть и достичь определенного успеха, в противном случае нас запишут в ряды неудачников,
            изгоев общества, которым нет места среди современного человечества.
        </p>

        <p class="textIndex">
            Для большинства такая мысль подобна внутреннему самоубийству.
            Внешне мы показываем успех и благополучие, демонстрируем свою силу характера и храбрость духа,
            и мы настолько заигрались в сильных мира сего, что быть чувственным, эмоциональным - это удел слабаков и неудачников.
            Но порой хочется остановится, и немного побыть тем человеком, которым ты на самом деле являешься, немного чутким, немного слабым,
            а может даже не сдержать себя и поплакать. Однако такое чувство мы прячем в себе подальше от остальных и от себя,
            чтобы никто не увидел, так как мы сильные духом, и нам нужно двигаться дальше, достигать успехов в жизни.
            Только вот о том, что нужна консультация психолога в кризисные моменты, мало кто задумывается.
            Но тот, кто считает, что психологическая помощь вовсе не нужна, будет не прав, ведь именно чуткий и
            внимательный профессиональный психолог поможет обрести гармоничное внутреннее состояние, которое повышает качество жизни.
        </p>

    </div>


</div>
