<?php
require_once"Models/IEtudiant.php";
require_once"Models/Etudiant.php";
require_once"Libs/Rooter.php";

$Rooter=new Rooter();
$Rooter->Route();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="Public/plateforme.css">
    <title>Plateforme</title>
</head>
<body>
<div class="container mt-2 text-justify col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <p class="text-center col-xl-12 col-lg-12 col-md-12 col-sm-12">BIENVENUE SUR LA PLATEFORME DE GESTION D'ALLOCATIONS DE CHAMBRES</p>
</div>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-3"" >
            <a href="Liste_etudiant">
                <button type="button" class="btn btn-block">liste des étudiants</button>
            </a>
            <a href="Enregistrer_etudiant">
                <button type="button" class="btn  btn-block">Enregistrer étudiant</button>
            </a>
            <a href="Liste_chambre">
                <button type="button" class="btn  btn-block">liste des Chambres</button>
            </a>
            <a href="Enregistrer_chambre">
                <button type="button" class="btn  btn-block">Enregister Chambre</button>
            </a>
        </div>
        <div id="gestion_chambre" class="col-9">
        
        </div>
    </div>
</div>




    
</body>
</html>


<script> 
$(document).on('click','a',function(e){
e.preventDefault();
let page=$(this).attr('href');
$('#gestion_chambre').load('Views/'+page+'.php')
});
</script>