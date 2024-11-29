<?php

namespace Enzo\Poo; // Déclare le namespace Enzo\Poo pour organiser le code et permettre l'autoloading

class ListCards
{

    //Tableau contenant les objets Card

    private $listCards;


    //Constructeur de la classe ListCards
    public function __construct(array $listCards)
    {
        $this->listCards = $listCards; // Initialise la propriété avec les cartes fournies
    }

    /**
     * Affiche toutes les cartes stockées dans $listCards
     */
    public function printCards()
    {
        // Parcourt chaque carte dans le tableau $listCards
        foreach ($this->listCards as $card) {
            // Affiche la question de la carte actuelle
            echo "Question : " . $card->getQuestion() . PHP_EOL;
            // Affiche la réponse de la carte actuelle
            echo "Réponse : " . $card->getAnswer() . PHP_EOL;
            // Affiche une ligne de séparation entre les cartes
            echo "------------------------------------" . PHP_EOL;
        }
    }
}
