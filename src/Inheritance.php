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
        return "I am ".$this->name."\n";
    }
}

$dog = new Dog();
echo $dog->hey();
echo $dog->intro();