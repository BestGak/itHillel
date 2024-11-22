<?php
namespace App;

Class Knight extends Weapon 
{
    public ?int $size;

    public function showSize(): int
    {
        return $this -> size;
    }

    public function changeSize(int $newSize): void
    {
        $this -> size = $newSize;
    }

    public function power(int $damage , int $multiplier): int
    {
        return pow($damage , $multiplier);
    } 
}