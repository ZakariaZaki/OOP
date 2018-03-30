<?php
include 'car.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php

  $car = new car();
  echo $car->display();

  echo $car->checkBrand('Audi');
  echo $car->checkWeight();
  echo $car->checkPlate();
  echo 'Before the ride : '.$car->getKm().' km<br>';
  echo $car->checkKm();
  echo $car->checkYear();
  echo $car->getBrand();
  echo $car->ride();
  echo 'After the ride : '.$car->getKm().' km<br>';
  echo $car->checkKm();
  echo $car->ride();
  echo 'After the second ride : '.$car->getKm().' km<br>';
  echo $car->checkKm();


   ?>
</body>
</html>
