<?php
class Boursier extends Etudiant{
    private $typebourse;


    public function __contruct($tab){
        $this->initialize($row);
    }
    public function initialize($row=null){

        if ($row!=null) {
            $this->typebourse=$row['typebourse'];
            
        }
    }
}
