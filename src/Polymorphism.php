<?php

interface People
{
    public function greet(); // Only method list, no implement details
}

abstract class PeopleAgain
{
    public function sayGoodbye() // Can include implement details
    {
        echo "Bye!"."\n";
    }
}

class English extends PeopleAgain implements People // Can extend an abstract and implement an interface at the same time
{
    public function greet()
    {
        echo "Hello!"."\n";
    }
}

class French extends PeopleAgain implements People
{
    public function greet()
    {
        echo "Bonjour!"."\n";
    }

    public function sayGoodbye()
    {
        echo "Au revoir!"."\n";
    }
}

$english = new English();
$english->greet(); // Hello!
$english->sayGoodbye(); // Bye!

$french = new French();
$french->greet(); // Bonjour!
$french->sayGoodbye(); // Au revoir!