<?php
    require 'include.php';

    //j'ai un erreur qui je ne sais pas comment gerer, il n'a pas de errors dans le terminal, cest tout bon, mais quand je ouvre le ficher il y a pleine de errors dans le index.php.
    //je pense qui je essayer de faire de la maniere plus complique, desole. Je me suis souvenu trop tard de la manière plus simple.

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $voitureControler = new DefaultController();
        $voitureControler->home();
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'addForm'){
        $voitureControler = new VoitureControler();
        $voitureControler->addForm();
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'addVoiture'){
        $voitureControler = new VoitureControler();
        $voitureControler->persistForm();
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $voitureControler = new VoitureControler();
        $VoitureControler->delete($_GET['id']);
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $voitureControler = new VoitureControler();
        $voitureControler->updateForm($_GET['id']);
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'updateVoiture' && isset($_GET['id'])){
        $voitureControler = new VoitureControler();
        $voitureControler->updateVoiture($_GET['id']);
    }

    else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'detailForm' && isset($_GET['id'])){
        $voitureControler = new VoitureControler();
        $voitureControler->detailForm($_GET['id']);
    }


    else {
        throw new Exception('Cette page n\'existe pas', 404);
    }

?>
