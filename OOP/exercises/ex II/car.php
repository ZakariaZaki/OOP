<?php
class car {
  private $plate = 'BE54512156';
  private $circulationDate = 1996;
  private $model = 'limo';
  private $km = 75000;
  private $brand = 'Audi i think';
  private $color = 'Rusty';
  private $weight = 4;

  function checkBrand($brand) {
    if ($brand == 'Audi') {
      echo 'Reserved<br>';
    } else {
      echo 'Free<br>';
    }
  }

  function getBrand() {
    return $this->brand.'<br>';
  }

  function checkWeight() {
    if ($this->weight > 3.5) {
      echo 'limo<br>';
    } else {
      echo 'Commercial vehicle<br>';
    }
  }

  function checkPlate() {
    if (substr($this->plate, 0, 2) == "BE") {
      echo 'Belgian origin<br>';
    } elseif (substr($this->plate, 0, 2) == "FR") {
      echo 'Frensh origin<br>';
    } elseif (substr($this->plate, 0, 2) == "DE") {
      echo 'German origin<br>';
    } else {
      echo 'UNKNOWN<br>';
    }
  }

  function checkKm() {
    if ($this->km > 200000) {
      echo 'mileage : high<br>';
    } elseif ($this->km > 100000) {
      echo 'mileage : middle<br>';
    } else {
      echo 'mileage : low<br>';
    }
  }

  function checkYear() {
    $year = date('Y');
    return 'the car is '.($year - ($this->circulationDate)).'   years old<br>';
  }
  function getKm() {
    return $this->km;
  }

  function setKm($km) {
    $this->km = $km;
  }

  function ride() {
    $this->setKm($this->km + 100000);
    // return $km = $this->km + 100000;
  }


  function display() {
    echo '<table border="1">';
    echo '<tr>
          <th>Car</th>
          <th>Brand</th>
          <th>Model</th>
          <th>Year of release</th>
          <th>Weight</th>
          <th>Color</th>
          </tr>';
    echo '<tr>
          <td><img src="https://i.pinimg.com/originals/29/b8/d4/29b8d408605a599bebb162e081b0f5de.jpg" alt="" /></td>
          <td>'.$this->brand.'</td>
          <td>'.$this->model.'</td>
          <td>'.$this->circulationDate.'</td>
          <td>'.$this->weight.'</td>
          <td>'.$this->color.'</td>
          </tr>';
    echo '</table>';
  }
}
 ?>
