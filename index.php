<?php 
    require_once 'classes/Compte.php';

    //On instancie le compte

    $compte1 = new Compte("Ben", 200);

    // On dépose 100

    $compte1->deposer(100);

    $compte1->retirer(50);
    var_dump($compte1);

    


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
    <p><?= $compte1->voirSolde(); ?></p>
    <script src="app.js"></script>
</body>
</html>