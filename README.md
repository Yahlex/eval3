# Devoir DESIGN PATTERN

## Table des matières

- [Devoir DESIGN PATTERN](#devoir-design-pattern)
  - [Table des matières](#table-des-matières)
  - [Lancer le Projet](#lancer-le-projet)
    - [Installer les Dépendances](#installer-les-dépendances)
  - [Questions :](#questions-)
    - [1](#1)
    - [2](#2)
    - [3](#3)
    - [Dictionnaire des Données](#dictionnaire-des-données)
  - [Veille et présentation d'un design pattern au choix](#veille-et-présentation-dun-design-pattern-au-choix)
    - [Choix](#choix)
    - [Contexte](#contexte)
    - [Avantages et inconvénients](#avantages-et-inconvénients)
    - [Implémenter le design pattern](#implémenter-le-design-pattern)
    - [Diagramme de classes UML](#diagramme-de-classes-uml)

## Lancer le Projet

### Installer les Dépendances

Assurez-vous d'avoir [Node.js](https://nodejs.org/) installé sur votre machine.

## Questions :

### 1

Les avantages que procure le fait de programmer vers une interface et non directement vers une implémentation sont : 

La flexibilité, car cela permet au client de manipuler les mêmes méthodes en obtenant des comportements différents selon les besoins.

L’extensibilité, car cela permet d’introduire de nouvelles implémentations de l’interface sans modifier le code existant. Cela facilite l’ajout de nouvelles fonctionnalités ou même la modification du comportement sans avoir d’impact sur le reste du système.

### 2

Préférer la composition à l'héritage est généralement recommandé pour une plus grande flexibilité. La composition, basée sur la relation “a-un”, permet des modifications de comportement à l'exécution, offrant une adaptabilité dynamique. 
En revanche, l'héritage (relation “est-un” ou “se comporte comme”) nécessite des modifications avant exécution, générant un couplage fort et des changements complexes. 

La composition maintient l'encapsulation avec une visibilité "Black box", évitant les détails internes partagés, tandis que l'héritage expose l'interface et l'implémentation, entraînant une visibilité "White box" et une encapsulation brisée.

### 3

En programmation orientée objet, une interface est comme un contrat définissant un ensemble de méthodes que les classes qui implémentent cette interface doivent fournir.En d'autres termes, une interface définit un ensemble de comportements attendus, et toute classe qui prétend implémenter cette interface doit fournir une implémentation concrète pour chacune de ces méthodes.

### Dictionnaire des Données



## Veille et présentation d'un design pattern au choix 


### Choix

Ajoutez ici vos remarques sur le travail réalisé, les difficultés rencontrées, etc.

### Contexte 
Ajoutez ici la liste des références (sites web, cours, livres, articles, billets de blog, etc.) qui vous ont aidé à concevoir et développer votre système.

### Avantages et inconvénients

### Implémenter le design pattern 

![Design Pattern : Le Décorateur (PHP)](index.php)

### Diagramme de classes UML

