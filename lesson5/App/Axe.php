<?php
namespace App;
final Class Axe extends Weapon 
{

    public ?int $skill;

    public function showSkill(): int
    {
        return $this -> skill;
    }

    public function changeSkill(int $newSkill): void
    {
        $this -> skill = $newSkill;
    }

    public function power(int $damage , int $multiplier): int
    {
        return pow($damage , $multiplier);
    } 
}