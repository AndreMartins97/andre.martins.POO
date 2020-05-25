<?php
    class VoitureManager extends DataBase {
        public function __construct()
        {
            parent::__construct();
        }


        public function selectAll()
        {
            $voitures = [];
            $sql = 'SELECT * FROM voiture';
            foreach ($this->bdd->query($sql) as $row) {
                $voitures[] = new Voiture($row['id'], $row[',marque'], $row['modele'], $row['energie'], $row['boleen']);
            }

            return $voitures;
        }


        public function insert(Voiture $voiture)
        {
            $id = $voiture->getId();
            $marque = $voiture->getMarque();
            $modele = $voiture->getModele();
            $energie = $voiture->getEnergie();
            $booleen = $voiture->getBooleen();
            $requete = $this->bdd->prepare("INSERT INTO voiture (id, marque, modele, energie, booleen) VALUES (?,?,?,?,?)");
            $requete->bindParam(1, $id);
            $requete->bindParam(2, $marque);
            $requete->bindParam(3, $modele);
            $requete->bindParam(4, $energie);
            $requete->bindParam(5, $booleen);
            $requete->execute();
            $voiture->setId($this->bdd->lastInsertId());

        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM voiture where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM voiture WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $voiture = new Voiture($res['id'], $res['marque'], $res['modele'], $res['energie'], $res['booleen']);

            return $voiture;
        }

        public function update(Voiture $voiture)    
        {
            $id = $voiture->getId();
            $marque = $voiture->getMarque();
            $modele = $voiture->getModele();
            $energie = $voiture->getEnergie();
            $booleen = $voiture->getBooleen();
            $requete = $this->bdd->prepare("UPDATE voiture SET id =? , marque = ?, modele = ?, energie = ?, booleen = ? WHERE id = ?");
            $requete->bindParam(1, $id);
            $requete->bindParam(2, $marque);
            $requete->bindParam(3, $modele);
            $requete->bindParam(4, $energie);
            $requete->bindParam(5, $booleen);
            $requete->execute();
        }



    }