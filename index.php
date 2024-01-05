<?php

// Interface Component
interface Coffee {
    public function cost();
}

// Concrete Component
class SimpleCoffee implements Coffee {
    public function cost() {
        return 10; // Coût d'un café simple
    }
}

// Decorator
abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }
}

// Concrete Decorator - Ajoute du lait
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 5; // Ajoute 5 au coût pour le lait
    }
}

// Concrete Decorator - Ajoute du sucre
class SugarDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 2; // Ajoute 2 au coût pour le sucre
    }
}

// Utilisation des décorateurs
$coffee = new SimpleCoffee();
$coffeeWithMilk = new MilkDecorator($coffee);
$coffeeWithMilkAndSugar = new SugarDecorator($coffeeWithMilk);

echo "Coût d'un café simple : " . $coffee->cost() . "€\n";
echo "Coût d'un café avec lait : " . $coffeeWithMilk->cost() . "€\n";
echo "Coût d'un café avec lait et sucre : " . $coffeeWithMilkAndSugar->cost() . "€\n";

?>
