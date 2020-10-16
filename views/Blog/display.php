<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>


<div class="site-index">



    <?php


//$foo = 10;   // $foo - это целое число
//$bar = (boolean) $foo;   // $bar - это булев тип
//echo $bar;
//echo "<br>";
//echo gettype($bar);

//    $foo = 10.1;            // $foo - это целое число
//    $str = "$foo";        // $str - это строка
//    $fst = (string) $foo; // $fst - это тоже строка
//
//    // Это напечатает "они одинаковы"
//    if ($fst === $str) {
//        echo "они одинаковы";
//    }
//
//    echo (strval($foo));


//    class A {
//        private $A; // Это станет '\0A\0A'
//    }
//
//    class B extends A {
//        private $A = 5; // Это станет '\0B\0A'
//        public $AA = 55; // Это станет 'AA'
//    }
//    var_dump((array) new B());

//    $obj = (object) array('1' => 'foo');
//    var_dump(isset($obj->{'1'})); // выводит 'bool(false)';
//    var_dump(key($obj)); // выводит 'int(1)';

//    $foo = 'Боб';              // Присваивает $foo значение 'Боб'
//    $bar = &$foo;              // Ссылка на $foo через $bar.
//    $bar = "Меня зовут $bar";  // Изменение $bar...
//    echo $bar;
//    echo $foo;                 // меняет и $foo.
//
//    echo '<br>';
//    echo $foo = "Стив";
//    $bar = &$foo;              // Ссылка на $foo через $bar.
//    $bar = "Меня зовут $bar";  // Изменение $bar...
//    echo $bar;
//    echo $foo;                 // меняет и $foo.

//    const MY_CONST = 5;
//
//    echo MY_CONST . '<br>';
//    echo PHP_VERSION . '<br>';
//    echo __FILE__ . '<br>';

//    $foo = 10;   // $foo - это целое число
//    $bar = (boolean) $foo;
//    echo $bar;

//    $a = 3;
//    $b = &$a; // $b - это ссылка на $a
//
//    print "$a\n"; // печатает 3
//    print "$b\n"; // печатает 3
//
//    $b = 9; // меняем $a
//
//    print "$a\n"; // печатает 4
//    print "$b\n";

    $g = true or false;
    echo $g;

    ?>








<!--    <div class="body-content">-->
<!---->
<!--        <video width="320" height="240" controls="controls"  poster="--><?php //echo '/video/photo.jpg' ?><!--">-->
<!--            <source src="--><?php //echo '/video/movie.ogv' ?><!--" type='video/ogg'>-->
<!--            <source src="--><?php //echo '/video/movie.mp4' ?><!--" type='video/mp4'>-->
<!--            <source src="--><?php //echo '/video/movie.webm' ?><!--" type='video/webm'>-->
<!--            Your browser does not support the video tag.-->
<!--        </video>-->
<!---->
<!--        <audio controls>-->
<!--            <source src="--><?php //echo '/audio/Nikalaev.ogg' ?><!--" type="audio/ogg; codecs=vorbis">-->
<!--            <source src="--><?php //echo '/audio/Nikalaev.mp3' ?><!--" type="audio/mpeg">-->
<!--            Тег audio не поддерживается вашим браузером.-->
<!--        </audio>-->
<!---->
<!--    </div>-->
</div>
