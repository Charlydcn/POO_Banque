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
    $compte2 = new BankAccount("Livret A", "€ EUROS", $johnDoe); // J'instancie un nouveau compte banciare (BankAccount) avec les 3 propriétés attendues

    echo "<h2>Titulaire 1 :</h2>" . $charlyDucournau;
    echo "<h2>Titulaire 2 :</h2>" . $johnDoe;
    echo "<h2>Compte 1 :</h2>" . $compte1;
    echo "<h2>Compte 2 :</h2>" . $compte2;



    // TESTS DEBIT & CREDIT    

    echo "<h2>TESTS DEBIT & CREDIT COMPTE 1</h2>" . "<br> Get Balance " . $compte1->getBalance() . "<br>";
    echo "(Crédit 150)" . $compte1->Credit(150);
    echo "<br> Get Balance " . $compte1->getBalance() . "<br>";
    echo "(Débit 100)" . $compte1->Debit(100);
    echo "<br> Get Balance " . $compte1->getBalance() . "<br>";

    echo "<h2>TESTS DEBIT & CREDIT COMPTE 2</h2>" . "<br> Get Balance " . $compte2->getBalance() . "<br>";
    echo "(Crédit 150)" . $compte2->Credit(150);
    echo "<br> Get Balance " . $compte2->getBalance() . "<br>";
    echo "(Débit 100)" . $compte2->Debit(100);
    echo "<br> Get Balance " . $compte2->getBalance() . "<br>";

    // TESTS TRANSFERT ENTRE COMPTES

    echo "<h2>TESTS TRANSFERTS</h2>" . "<br> Solde compte 1<br>" . $compte1->getBalance() . " €<br>";
    echo "Solde compte 2 <br>" . $compte2->getBalance() . " €<br>";

    echo "Transfert de 50€ du compte 1 vers le compte 2 <br>";
    $compte1->bankTransfer(50, $compte2);

    echo "Solde compte 1 <br>" . $compte1->getBalance() . " €<br>";
    echo "Solde compte 2 <br>" . $compte2->getBalance() . " €<br>";


    ?>
    
</body>
</html>