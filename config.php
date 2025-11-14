<?php
// Configuration générale du cours
define('COURSE_TITLE', 'La Programmation Orientée Objet (POO) avec Python');
define('COURSE_AUTHOR', 'P. Rahmouni Oussama'); // Vous pourrez changer ce nom
define('COURSE_LAST_UPDATE', 'Novembre 2025');

// Structure du cours pour générer le sommaire dynamiquement
$course_parts = [
    "Partie 1 : Les Fondamentaux de la POO" => [
        ['id' => 'accueil', 'title' => "Chapitre 1 : Pourquoi la POO ? De la procédure à l'objet"],
        ['id' => 'classes-objets', 'title' => "Chapitre 2 : Les Classes et les Objets"],
        ['id' => 'constructeur-attributs', 'title' => "Chapitre 3 : Le Constructeur et les Attributs d'instance"],
        ['id' => 'methodes', 'title' => "Chapitre 4 : Les Méthodes, le comportement des objets"],
        ['id' => 'exercices-partie1', 'title' => "Ateliers Pratiques (Partie 1)"]
    ],
    "Partie 2 : Les Piliers de la POO" => [
        ['id' => 'encapsulation', 'title' => "Chapitre 5 : L'Encapsulation et la visibilité des attributs"],
        ['id' => 'heritage', 'title' => "Chapitre 6 : L'Héritage, réutiliser et étendre"],
        ['id' => 'polymorphisme', 'title' => "Chapitre 7 : Le Polymorphisme, un nom pour plusieurs formes"],
        ['id' => 'exercices-partie2', 'title' => "Ateliers Pratiques (Partie 2)"]
    ],
    "Partie 3 : Concepts Avancés et Magie Python" => [
        ['id' => 'methodes-speciales', 'title' => "Chapitre 8 : Les Méthodes Spéciales (Dunder)"],
        ['id' => 'methodes-classe-statique', 'title' => "Chapitre 9 : Attributs et Méthodes de Classe/Statiques"],
        ['id' => 'exercices-partie3', 'title' => "Ateliers Pratiques (Partie 3)"]
    ],
    "Partie 4 : Ateliers de Synthèse" => [
        ['id' => 'projet-pratique', 'title' => "Chapitre 10 : Projet Pratique - Mini-système de gestion de bibliothèque"],
        ['id' => 'conclusion', 'title' => "Conclusion & Perspectives"]
    ]
];
?>