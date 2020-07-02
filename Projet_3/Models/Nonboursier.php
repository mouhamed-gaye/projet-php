<?php
class Nonboursier extends Etudiant{
    private $adresse;


    public function __contruct($tab){
        $this->initialize($row);
    }
    public function initialize($row=null){

        if ($row!=null) {
            $this->adresse=$row['adresse'];
            
        }
    }
}
