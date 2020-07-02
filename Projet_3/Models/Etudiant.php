<?php
class Etudiant implements IEtudiant{
    private $matricule;
    private $prenom;
    private $nom;
    private $email;
    private $telephone;
    private $dateNaiss;


    public function __contruct($tab){
        $this->initialize($row);
    }
    public function initialize($row=null){

        if ($row!=null) {
            $this->matricule=$row['matricule'];
            $this->prenom=$row['prenom'];
            $this->nom=$row['nom'];
            $this->email=$row['email'];
            $this->telephone=$row['telephone'];
            $this->dateNaiss=$row['dateNaiss'];
        }
    }
}
