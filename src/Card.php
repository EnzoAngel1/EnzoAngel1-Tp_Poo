<?php

namespace Enzo\Poo; // Déclare le namespace Enzo\Poo pour organiser le code et permettre l'autoloading

class Card
{
    // Propriétés privées pour stocker la question et la réponse de la carte
    private $question;
    private $answer;

    // Constructeur de la classe, initialise la question et la réponse de la carte
    public function __construct($question, $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    // Retourne la question associée à la carte
    public function getQuestion()
    {
        return $this->question;
    }

    // Retourne la réponse associée à la carte
    public function getAnswer()
    {
        return $this->answer;
    }
}
