<?php
class Bicycle
{
    private string $color;

    private int $currentSpeed;

    public int $nbSeats = 1;

    public int $nbWheels = 2;

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
public function getColor(): string
{
    return $this->color;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}



}