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

    $charlyDucournau = new Holder("Charly", "Ducournau", "2001-08-28", "Strasbourg");
    $compte1 = new BankAccount("Compte courant", "€ EUROS", $charlyDucournau);

    $johnDoe = new Holder("John", "Doe", "1995-07-01", "Washington DC");
    $compte2 = new BankAccount("Compte courant", "€ EUROS", $johnDoe);

    echo "<h2>toString titulaire :</h2>" . $charlyDucournau;
    echo "<h2>toString titulaire :</h2>" . $johnDoe;
    echo "<h2>toString compte :</h2>" . $compte1;
    echo "<h2>toString compte :</h2>" . $compte2;

    // TESTS DEBIT & CREDIT
    
    // echo "<br>" . $compte1->getBalance();
    // echo "<br>" . $compte1->Credit(150);
    // echo $compte1->getBalance();
    // echo "<br>" . $compte1->Debit(100);
    // echo $compte1->getBalance();

    ?>
    
</body>
</html>