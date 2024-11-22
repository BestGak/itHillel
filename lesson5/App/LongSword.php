<?php 
namespace App;

class LongSword extends Sword 
{
    public ?int $sharpness;

    public function showSharpness(): int
    {
        return $this->sharpness;
    }

    public function changeSharpness(int $newSharpness): void
    {
        $this->sharpness = $newSharpness;
    }

    public function power(int $damage, int $multiplier): int
    {
        return pow($damage + $this->showSharpness(), $multiplier);
    }

    public function calculatePiercingWithSharpness(): int
    {
        return $this->showPiercing() * $this->showSharpness();
    }
}