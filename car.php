<?php 
/* clase qui permettra d'instancier les objet */
class Car
{

    /* propriété de la classe voiture */

    private int $nbWheels = 4; 

    private int $currentSpeed;

    private string $color;

    private int $nbSeat;

    private string $energy;

    private int $energyLevel;

    /*méthodes*/

    /* comportement par défaut */

    public function __construct(string $color, int $nbSeat, string $energy)
{
    $this->color = $color;

    $this->nbSeat = $nbSeat;

    $this->energy = $energy;
}

/* métode a appliquer pour currentSpeed*/

public function start(): string 
{
    $this->currentSpeed = 0;
    
    return "ready?";
}

public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

/* méthode get propriété*/

public function getNbWheels(): int
{
    return $this->nbWheels;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function getColor(): string
{
    return $this->color;
}

public function getNbSeat(): int
{
    return $this->nbSeat;
}

public function getEnergy(): string
{
    return $this->energy;
}

public function getEnergyLevel(): string
{
    return $this->energyLevel;
}


}