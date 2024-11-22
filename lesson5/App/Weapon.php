<?php
namespace App;
abstract class Weapon
{
    public ?int $damage;
    public ?int $piercing;

    public function showDamage(): int
    {
        return $this -> damage;
    }

    public function changeDamage(int $newDamage): void
    {
        $this -> damage = $newDamage;
    }

    public function showPiercing() {
        return $this -> piercing;
    }

    public function changePiercing(int $newPiercing): void
    {
        $this -> piercing = $newPiercing;
    }

    abstract function power(int $damage , int $multiplier) ;
}