<?php

    class Voiture {
        private $id;
        private $marque;
        private $modele;
        private $energie;
        private $booleen;



        /**
         * Recette constructor.
         * @param $id
         * @param $marque
         * @param $modele
         * @param $energie
         * @param $booleen

         */
        public function __construct($id, $marque, $modele, $energie, $booleen)
        {
            $this->id = $id;
            $this->marque = $marque;
            $this->modele = $modele;
            $this->energie = $energie;
            $this->booleen = $booleen;

        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getMarque()
        {
            return $this->marque;
        }

        /**
         * @param mixed $marque
         */
        public function setMarque($Marque)
        {
            $this->Marque = $Marque;
        }


        /**
         * @return mixed
         */
        public function getModele()
        {
            return $this->modele;
        }

        /**
         * @param mixed $modele
         */
        public function setModele($modele)
        {
            $this->modele = $modele;
        }

        /**
         * @return mixed
         */
        public function getEnergie()
        {
            return $this->energie;
        }

        /**
         * @param mixed $energie
         */
        public function setEnergie($energie)
        {
            $this->energie = $energie;
        }



        /**
         * @return mixed
         */
        public function getBooleen()
        {
            return $this->booleen;
        }

        /**
         * @param mixed $booleen
         */
        public function setBooleen($booleen)
        {
            $this->booleen = $booleen;
        }


    }
?>