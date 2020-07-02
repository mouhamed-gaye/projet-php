<?php
class Chambre{
private $numChambre;
private $typeChambre;
private $numBatiment;


    public function __contruct($tab){
        $this->initialize($row);
    }
    public function initialize($row=null){

        if ($row!=null) {
            $this->numChambre=$row['numChambre'];
            $this->typeChambre=$row['typeChambre'];
            $this->numBatiment=$row['numBatiment'];
        }
    }



}