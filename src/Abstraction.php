<?php

abstract class Visa
{
    public function visaPayment(): string
    {
        return "Perform a payment..."."\n";
    }

    abstract public function getPayment();
}

class BuySomething extends Visa
{
    public function getPayment(): string
    {
        return $this->visaPayment();
    }
}

// Can't create an instance from an Abstract class
// $visa = new Visa();
$buySth = new BuySomething();
echo $buySth->visaPayment();
echo $buySth->getPayment();