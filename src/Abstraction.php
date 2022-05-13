<?php

abstract class Visa
{
    public function visaPayment(): string // Abstract class can have the implemented details inside the function
    {
        return "Perform a payment..."."\n";
    }

    abstract public function getPayment(); // Or just a function list
}

class BuySomething extends Visa
{
    // But the subclass which extends an abstraction class should add the implemented details into the inherited abstract function
    public function getPayment(): string
    {
        return $this->visaPayment();
    }
}

// Can't create an instance from an Abstract class
// $visa = new Visa();
$buySth = new BuySomething();
echo $buySth->visaPayment(); // Perform a payment
echo $buySth->getPayment(); // Perform a payment