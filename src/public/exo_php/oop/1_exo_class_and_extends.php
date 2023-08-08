<?php
class Beverage {
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct($color,$price, $temperature = 'cold') {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
      return 'This beverage is, ' . $this->temperature . ' and ' . $this->color . ' and the price is ' . $this->price . '€' ;
    }
}

$cola = new Beverage('black', 2.0);
echo $cola -> getInfo();

class Beer extends Beverage {
    public string $name;
    public float $alcoholPercentage;

    public function __construct($name, $alcoholPercentage, $color, $price, $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage(){
        return $this->alcoholPercentage . '%';
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo '<br>';
echo  $duvel-> getAlcoholPercentage(), '<br>';
var_dump( $duvel ->getAlcoholPercentage());
echo '<br>';
echo $duvel -> getInfo();