<?php

// L'Interface du composant (L’interface du composant définit les traitements qui peuvent être modifiés par les décorateurs.)

interface Coffee {
    public function cost();
}

// Composant concret (Les composants concrets fournissent des implémentations par défaut pour les traitements.)

class SimpleCoffee implements Coffee {
    public function cost() {
        return 10; // Coût d'un café simple
    }
}

// Decorateur de base (La classe de base du décorateur implémente la même interface  que les autres composants. Le but principal de cette classe  est de définir l’interface d’emballage pour tous les
// décorateurs concrets.)

abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost();
    }
}

// Concrete Decorator - Ajoute du lait (on emballe l'objet dans un décorateur spécifique)
class MilkDecorator extends CoffeeDecorator {
    public function cost() {
        return $this->coffee->cost() + 5; // Ajoute 5 au coût pour le lait
    }
}

//  - Ajoute du sucre
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
