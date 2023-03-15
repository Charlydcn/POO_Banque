<?php

class Holder
{
    private string $_firstName;
    private string $_lastName;
    private DateTime $_birthDate; // La date de naissance en type DateTime, ce qui fait que dans le constructeur, je devrais instancier un nouvel objet de classe DateTime :
    private string $_city;
    private array $_bankAccounts;

    public function __construct(string $firstName, string $lastName, string $birthDate, string $city)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = new DateTime($birthDate); // j'instancie $birthdate en tant qu'objet de la classe DateTime
        $this->_city = $city;
        $this->_bankAccounts = [];
    }

// ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) ************************************** 

    public function getFirstName () // CHECK
    {
        return $this->_firstName;
    }

    public function getLastName () // CHECK
    {
        return $this->_lastName;
    }

    public function getBirthDate () // CHECK
    {
        return $this->_birthDate->format("Y-m-d"); // Je formate ma date avec la méthode native de la classe DateTime dans le format (ANNÉE-mois-jour)
    }

    public function getCity () // CHECK
    {
        return $this->_city;
    }

    public function getBankAccounts () // CHECK
    {
        $result = "<ul>";
                foreach ($this->_bankAccounts as $account) { // Pour chaque $account (compte) dans mon tableau bankAccounts, exécuter les instructions ci-données :
                    $result .= "<li>" . $account . "</li>";
                }
                $result .= "</ul>";
        return $result;
    }

    public function getAge() {
        $now = new DateTime();
        $diff = $this->_birthDate->diff($now);
        return $diff->y." ans";
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setFirstName (string $firstName) // CHECK
    {
        $this->_firstName = $firstName;
    }

    public function setLastName (string $lastName) // CHECK
    {
        $this->_lastName = $lastName;
    }

    public function setBirthDate ($birthDate) // CHECK
    {
        $this->_birthDate = new DateTime($birthDate); // Comme dans le constructeur de cette classe, si je veux changer ma birthDate, je dois instancier un nouvel objet DateTime
    }
    
    public function setCity (string $city) // CHECK
    {
        $this->_city = $city;
    }

    public function setBankAccounts (array $bankAccounts) // CHECK
    {
        $this->_bankAccounts = $bankAccounts;
    }

    // *************************************************************************************************

    public function addBankAccount(BankAccount $bankAccount) // Pour chaque bankAccount instancié à partir de la classe BankAccount, exécuter les instructions ci-données :
    {     
       $this->_bankAccounts[] = $bankAccount; // Ajouter le bankAccount instancié dans mon tableau bankAccounts
    }

    public function __toString() // CHECK
    {
        return "<strong>Last name : </strong>" . $this->_lastName . "<br>"
        . "<strong>First name : </strong>" . $this->_firstName . "<br>"
        . "<strong>Date of birth : </strong>". $this->getAge() . "<br>" // J'utilise ici le getBirthDate et non directement le _birthDate pour assurer la conversion en string du DateTime
        . "<strong>City : </strong>". $this->_city . "<br>"
        . "<strong>Bank Accounts : </strong>" . $this->getBankAccounts(); // J'utilise ici le getBankAccounts et non directement le _bankAccounts pour ne pas convertir un tableau en string
    }

    
    
}

?>