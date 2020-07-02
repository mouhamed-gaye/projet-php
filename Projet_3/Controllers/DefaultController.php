<?php
class DefaultController{
     public function index(){
        $pathCtrl="./Views/Layout/DefaultLayout.php"
        require_once $pathCtrl;
     }
}