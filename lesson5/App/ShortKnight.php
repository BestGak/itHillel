<?php
namespace App;

class ShortKnight extends Knight 
{
    public ?int $shield;

    public function showShield(): int
    {
        return $this->shield;
    }

    public function changeShield(int $newShield): void
    {
        $this->shield = $newShield;
    }

    public function power(int $damage, int $multiplier): int
    {
        return pow($damage + $this->showShield(), $multiplier);
    }

    public function calculateDamageWithShield(): int
    {
        return $this->showDamage() + $this->showShield();
    }
}