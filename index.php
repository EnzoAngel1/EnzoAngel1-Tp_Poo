<?php
require_once 'vendor/autoload.php'; // Charge automatiquement les classes avec Composer

use Enzo\Poo\Card; // Importe la classe Card depuis l'espace de noms Enzo\Poo
use Enzo\Poo\ListCards; // Importe la classe ListCards depuis l'espace de noms Enzo\Poo


//Demande à l'utilisateur combien de cartes il souhaite créer.

function demanderNombreCartes(): int
{
    do {
        // Demande à l'utilisateur de saisir un nombre
        $input = readline('Combien de cartes voulez-vous? ');

        // Valide que l'entrée est un entier positif (>= 1)
        $nombre = filter_var($input, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);

        // Si la validation échoue, afficher un message d'erreur
        if ($nombre === false) {
            echo "Veuillez entrer un nombre positif.\n";
        }
    } while ($nombre === false); // Continue à demander tant que l'entrée est invalide

    return $nombre; // Retourne le nombre validé
}

/**
 * Collecte les questions et réponses des cartes, puis les affiche.
 */
function collecterCartes(): void
{
    // Demande le nombre de cartes à créer
    $nombreDeCartes = demanderNombreCartes();

    // Initialise un tableau pour stocker les cartes
    $nbCards = [];

    // Collecte les informations pour chaque carte
    for ($i = 0; $i < $nombreDeCartes; $i++) {
        // Demande la question pour la carte actuelle
        $question = readline("Entrez la question pour la carte " . ($i + 1) . ": ");

        // Demande la réponse pour la carte actuelle
        $answer = readline("Entrez la réponse pour la carte " . ($i + 1) . ": ");

        // Crée une nouvelle instance de Card avec la question et la réponse, et l'ajoute au tableau
        $nbCards[] = new Card($question, $answer);
    }

    // Crée une instance de ListCards avec toutes les cartes collectées
    $listCards = new ListCards($nbCards);

    // Affiche les informations des cartes
    $listCards->printCards();
}

// Appelle la fonction principale pour collecter et afficher les cartes
collecterCartes();
