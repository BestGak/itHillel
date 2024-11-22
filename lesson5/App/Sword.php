<?php
namespace App;

Class Sword extends Weapon 
{
    public ?int $lucky;

    public function showLucky(): int
    {
        return $this -> lucky;
    }

    public function changeLucky(int $newLucky): void
    {
        $this -> lucky = $newLucky;
    }

    public function power(int $damage , int $multiplier): int
    {
        return pow($damage , $multiplier);
    } 
}