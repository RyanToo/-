<?php 
include 'core/autoload.php';
$book = new \product\book("трансформатор", "Д. Портнягин", "1000", "Россия");
$window1 = new \product\window("пластиковое окно", "с двумя камерами", "8900  ", "Россия" );
$window2 = new \product\window("пластиковое окно", "однокамерное", "4100 ", "Россия");
$kirpich1 = new \product\kirpich("кирпич красный 180*35*7", "вес: 2.720кг", "67 руб/шт", "Россия" );
$kirpich2 = new \product\kirpich("кирпич белый 180*35*16", "вес: 4.150кг ", "76 руб/шт", "Россия");
$book -> getFullDescription();
echo '<br>';
$window1 -> getFullDescription();
echo '<br>';
$window2 -> getFullDescription();
echo '<br>';
$kirpich1 -> getFullDescription();
echo '<br>';
$kirpich2 -> getFullDescription();
$accuracy = new \accuracy\accuracy();
    $accuracy->addProduct($book);
    $accuracy->addProduct($window1);
    $accuracy->addProduct($window2);
    $accuracy->addProduct($kirpich1);
    $accuracy->addProduct($kirpich2);
echo '<br>';
$accuracy->showAllProduct();
 echo '<br>';
 echo '<br>';
echo 'На сумму: ' . $accuracy->sum();

