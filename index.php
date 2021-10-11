<?php

    require_once 'Bicycle.php';

    $bike = new Bicycle('green');
    var_dump($bike);
    $claireBike = new Bicycle('red');
    var_dump($claireBike);



    echo $bike->forward();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();
    echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
    echo $bike->brake();

    $car = new Car('red',5,'diesel');
    var_dump($car);
    $claireCar = new Car('yellow',4,'diesel');
    var_dump($claireCar);


    echo $car->start();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->forward();
    echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
    echo $car->brake();

