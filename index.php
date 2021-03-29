<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';


require_once 'car.php';
$clio = new Car("bleu",4,"fuel");
echo $clio->start();
echo '<br> Vitesse de la voiture : ' . $clio->getCurrentSpeed() . ' km/h' . '<br>';
echo $clio->forward();
echo '<br> Vitesse de la voiture : ' . $clio->getCurrentSpeed() . ' km/h' . '<br>';
echo $clio->brake();
echo '<br> Vitesse dde la voiture : ' . $clio->getCurrentSpeed() . ' km/h' . '<br>';
