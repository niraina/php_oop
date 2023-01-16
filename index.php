<?php 
    require_once 'classes/Compte.php';

    //On instancie le compte

    $compte1 = new Compte;

    // On ecrit dans compte1
    $compte1->titulaire = "Jhon";
    $compte1->solde = 200;

    var_dump($compte1);

    $compte2 = new Compte;

    $compte2->titulaire = "Deo";
    $compte2->solde = 100.85;

    var_dump($compte2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="app.js"></script>
</body>
</html>