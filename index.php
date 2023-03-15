<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banque</title>
    <style>
        * {
            font-family: arial;
        }
    </style>
</head>
<body>
    <h1>BANQUE</h1>
    <?php

    spl_autoload_register(function ($class_name) {
        include $class_name . ".php";
    });

    $charlyDucournau = new Holder("Charly", "Ducournau", "2001-08-28", "Strasbourg"); // J'instancie un nouveau titulaire (Holder) avec les 4 propriétés attendues
    $compte1 = new BankAccount("Compte courant", "€ EUROS", $charlyDucournau); // J'instancie un nouveau compte banciare (BankAccount) avec les 3 propriétés attendues

    $johnDoe = new Holder("John", "Doe", "1995-07-01", "Washington DC"); // J'instancie un nouveau titulaire (Holder) avec les 4 propriétés attendues
    $compte2 = new BankAccount("Compte courant", "€ EUROS", $johnDoe); // J'instancie un nouveau compte banciare (BankAccount) avec les 3 propriétés attendues

    echo "<h2>Titulaire 1 :</h2>" . $charlyDucournau;
    echo "<h2>Titulaire 2 :</h2>" . $johnDoe;
    echo "<h2>Compte 1 :</h2>" . $compte1;
    echo "<h2>Compte 2 :</h2>" . $compte2;



    ?>
    
</body>
</html>