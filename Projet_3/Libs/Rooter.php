<?php

 class Rooter{
    
 private  $ctrl ;
 // Url => index.php? Url = security / index
 // Reecrire l'URL => sécurité / index
    function  route(){

        try{
            spl_autoload_register(function($class){
                $pathModels = "./Models/".$class.".php" ;
                $pathDao = "./Dao/".$class.".php" ;
                $pathLibs = "./Libs/".$class.".php" ;
                if(file_exists($pathModels)){
                    require_once($pathModels);
                }elseif(file_exists($pathDao)){
                    require_once($pathDao);
                }elseif(file_exists($pathLibs)){
                 require_once($pathLibs);
             }     
             });


             if(isset($_GET['url'])){
                $Url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                  // Contrôleur Classe
                  $ctrl= cfirst(strtolower($url[0]))."Controller" ;
                  $pathCtrl="./Controllers/".$ctrl.".php" ;
                    if(file_exists($pathCtrl)){
                        require_once($pathCtrl);
                        // Contrôleur Instancier un Objet
                        $this->ctrl= new  $ctrl();
                        $action = $url[1];
                        if(method_exists($this->ctrl,$action)){
                          // Action Existe dans le Controller
                           $this->ctrl->{$action}();
                        }else{
                         // Action n'Existe pas dans le Controller
                          $pathCtrl ="./controllers/ErrorController.php" ;
                          require_once($pathCtrl);
                          $erreurCtrl = new  ErrorController();
                          $erreurCtrl->showError("Cette méthode n'existe pas");
                        }
                        
                    } else {
                        $pathCtrl ="./Controllers/ErrorController.php" ;
                        require_once($pathCtrl);
                        $erreurCtrl = new  ErreurController();
                        $erreurCtrl->showError("Ce controller n'existe Pas");
                    }
             } /*else {
                $pathCtrl ="./controllers/SecurityController.php" ;
                require_once($pathCtrl);
                $this->ctrl = new  SecurityController();
                $this->ctrl->index();
             }*/
             
        } catch(Exception $ex){

        }
       
    }
}