<?php 
namespace App;

class ShortSword extends Sword 
{
    public ?int $luckFactor;

    public function showLuckFactor(): int
    {
        return $this->luckFactor;
    }

    public function changeLuckFactor(int $newLuckFactor): void
    {
        $this->luckFactor = $newLuckFactor;
    }

    public function power(int $damage, int $multiplier): int
    {
        return pow($damage + $this->showLuckFactor(), $multiplier);
    }

    public function calculatePiercingWithLuck(): int
    {
        return $this->showPiercing() + $this->showLuckFactor();
    }
}