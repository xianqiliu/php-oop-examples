<?php

class Animal
{
    protected string $name = "Animal";
    private string $habitat = "Earth";

    public function hey(): string
    {
        $a = "heyyy! ";
        return $a;
    }
}

class Dog extends Animal
{
    public function hey(): string
    {
        $a = "bonjourrr! ";
        return $a;
    }

    public function intro(): string
    {
        return "I am ".$this->name."\n"; // the protected variable in parent class is visible to subclass
    }
}

$dog = new Dog();
echo $dog->hey(); // bonjour!
echo $dog->intro(); // I am Animal