<?php


    class VoitureControler {
        public function addForm()
        {
            require 'View/insert.php';
        }

        public function persistForm()
        {


            $voiture = new Voiture(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['booleen']);
            $voitureManager = new VoitureManager();
            $voitureManager->insert($voiture);
            header('Location: /Andre.Martins.POO/index.php?controller=default&action=home');
        }

        public function delete($id)
        {
            $voitureManager = new VoitureManager();
            $voitureManager->delete($id);
            header('Location: /Andre.Martins.POO/index.php?controller=default&action=home');
        }


        public function updateForm($id)
        {
            $voitureManager = new VoitureManager();
            $voiture = $voitureManager->select($id);

            require 'View/update.php';
        }

        public function updateVoiture($id)
        {
            $fileUrl = null;
            $voitureManager = new VoitureManager();
            $voiture = $voitureManager->select($id);
            $voiture = new Voiture($id, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['booleen']);
            $voitureManager->update($voiture);

            header('Location: /Andre.Martins.POO/index.php?controller=default&action=home');
        }

        public function detailForm($id)
        {
            $voitureManager = new VoitureManager();
            $voiture = $voitureManager->select($id);

            require 'View/detail.php';
        }


    }