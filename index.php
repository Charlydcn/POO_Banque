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

    $charlyducournau = new Holder("Charly", "Ducournau", "2001-08-28", "Strasbourg", []);
    $compte1 = new BankAccount("Compte courant", 0, "EUROS €", $charlyducournau);

    echo "<h2>toString titulaire :</h2>" . $charlyducournau;
    echo "<h2>toString compte :</h2>" . $compte1;

    ?>
    
</body>
</html>