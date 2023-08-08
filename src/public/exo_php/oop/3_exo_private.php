<?php
class Beverage
{
    protected string $color;
    private float $price;
    private string $temperature;

    public function __construct($color, $price, $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return 'This beverage is, ' . $this->temperature . ' and ' . $this->color . ' and the price is ' . $this->price . '€';
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;

    public function __construct($name, $alcoholPercentage, $color, $price, $temperature = 'cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage()
    {
        return $this->alcoholPercentage . '%';
    }

    public function setColor($color){
        $this->color = $color;
    }

    private function beerInfo(){
        return "Salut, je suis {$this->name} et j'ai un pourcentage d'alcool de {$this->alcoholPercentage} et j'ai une couleur {$this->color}.";
    }

    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholPercentage(), '<br>';
var_dump($duvel->getAlcoholPercentage());
echo '<br>';
echo $duvel->getInfo();
echo '<br>';
$duvel -> setColor('light');
echo $duvel ->getInfo();
echo '<br>';
echo $duvel->getBeerInfo();
