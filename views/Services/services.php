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



    <!-- Добавьте модальное окно после открывающего тега body-->
    <div class="modal fade" id="image-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="modal-title">Просмотр изображения</div>
                </div>
                <div class="modal-body">
                    <img class="img-responsive center-block" src="<?php echo '/photo/certificates/id1_1.jpg'; ?>" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>



    <div class="row">

        <!-- 1 Изображение -->
        <div class="col-sm-6">
            <a href="#" class="thumbnail">
                <img class="myImg" src="<?php echo '/photo/certificates/id1_1.jpg'; ?>" alt="...">
            </a>
        </div>

        <!--...-->

        <!-- 12 Изображение -->
        <div class="col-sm-6">
            <a href="#" class="thumbnail">
                <img class="myImg" src="<?php echo '/photo/certificates/id1_1.jpg'; ?>" alt="...">
            </a>
        </div>

    </div>



    <script>
        // После загрузки DOM-дерева (страницы)
        $(function() {
            //при нажатии на ссылку, содержащую Thumbnail
            $('a.thumbnail').click(function(e) {
                //отменить стандартное действие браузера
                e.preventDefault();
                //присвоить атрибуту scr элемента img модального окна
                //значение атрибута scr изображения, которое обёрнуто
                //вокруг элемента a, на который нажал пользователь
                $('#image-modal .modal-body img').attr('src', $(this).find('img').attr('src'));
                //открыть модальное окно
                $("#image-modal").modal('show');
            });
            //при нажатию на изображение внутри модального окна
            //закрыть его (модальное окно)
            $('#image-modal .modal-body img').on('click', function() {
                $("#image-modal").modal('hide')
            });
        });
    </script>

</div>
