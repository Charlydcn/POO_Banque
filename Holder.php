<?php

class Holder
{
    private string $_firstname;
    private string $_lastname;
    private DateTime $_birthdate;
    private string $_city;
    private array $_bankaccounts = [];

    public function __construct(string $firstname, string $lastname, string $birthdate, string $city, array $bankaccounts)
    {
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_birthdate = new DateTime($birthdate);
        $this->_city = $city;
        $this->_bankaccounts = [];
    }

// ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) ************************************** 

    public function getFirstName () // A TESTER
    {
        return $this->_firstname;
    }

    public function getLastname () // A TESTER
    {
        return $this->_lastname;
    }

    public function getBirthDate () // A TESTER
    {
        return $this->_birthdate->format("Y-m-d");
    }

    public function getCity () // A TESTER
    {
        return $this->_city;
    }

    public function getBankAccounts () // A TESTER
    {
        return $this->_bankaccounts;
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setFirstName ($firstname) // A TESTER
    {
        $this->_firstname = $firstname;
    }

    public function setLastName ($lastname) // A TESTER
    {
        $this->_lastname = $lastname;
    }

    public function setBirthDate ($birthdate) // A TESTER
    {
        $this->_birthdate = $birthdate;
    }
    
    public function setCity ($city) // A TESTER
    {
        $this->_city = $city;
    }

    public function setBankAccounts ($bankaccount) // A FAIRE
    {
        //
    }

    // *************************************************************************************************

    public function __toString()
    {
        return "<strong>Nom : </strong>" . $this->_lastname . "<br>"
        . "<strong>Prénom : </strong>" . $this->_firstname . "<br>"
        . "<strong>Date de naissance : </strong>". $this->getBirthDate() . "<br>"
        . "<strong>Ville : </strong>". $this->_city . "<br>";
        // . $this->_bankaccounts;
    }

    public function addBankAccount(BankAccount $bankaccount)
    {
        $this->_bankaccounts[] = $bankaccount;
    }
    
}

?>