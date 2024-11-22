<?php
namespace App;

class LongKnight extends Knight 
{
    public ?int $speed;

    public function showSpeed(): int
    {
        return $this->speed;
    }

    public function changeSpeed(int $newSpeed): void
    {
        $this->speed = $newSpeed;
    }

    public function power(int $damage, int $multiplier): int
    {
        return pow($damage + $this->showSpeed(), $multiplier);
    }

    public function calculateDamageWithSpeed(): int
    {
        return $this->showDamage() * $this->showSpeed();
    }
}