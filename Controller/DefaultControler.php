<?php

class DefaultController{

    public function home()
    {
        $voitureManager = new VoitureManager();
        $voiture = $voitureManager->selectAll();
        require 'View/home.php';
    }
}