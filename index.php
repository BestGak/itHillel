<?php 

// 1) Создать родительский (главный класс)
// Класс должен содержать 2 свойства
// Каждое свойство должно иметь геттеры и сеттеры
// должен содержать абстрактную функцию возведения в степень

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


// 2) Создать 3 наследника родительского класса
// Каждый наследник должен содержать одно свойство
// Каждое свойство должно иметь геттер и сеттер
// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными
// Один наследник не должен быть наследуемым


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

// 3) Создать по 2 наследника от наследников первого уровня

// Каждое свойство должно иметь геттер и сеттер

// Наследники должны реализовать по одному методу который выполняет одно математическое действие с данными родителя и своими данными

// И по одному методу который выполняет любое математическое действие со свойством корневого класса и своим свойством

// В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции

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


$sword = new LongSword();
$sword->changeDamage(40);
$sword->changePiercing(20);
$sword->changeLucky(15);
$sword->changeSharpness(10);

var_dump($sword->showDamage()); 
var_dump($sword->showPiercing()); 
var_dump($sword->showSharpness()); 

var_dump($sword->power($sword->showDamage(), 2)); 
var_dump($sword->calculatePiercingWithSharpness()); 
