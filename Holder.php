<?php

class Holder
{
    private string $_firstname;
    private string $_lastname;
    private DateTime $_birthdate;
    private string $_city;
    private array $_bankaccounts = [];

    public function __construct(string $firstname, string $lastname, DateTime $birthdate, string $city, array $bankaccounts)
    {
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_birthdate = $birthdate;
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

    public function getCurrency () // A TESTER
    {
        return $this->_birthdate;
    }

    public function getHolder () // A TESTER
    {
        return $this->_city;
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
    public function setCurrency ($birthdate) // A TESTER
    {
        $this->_birthdate = $birthdate;
    }
    public function setHolder ($city) // A TESTER
    {
        $this->_city = $city;
    }

    // *************************************************************************************************

    public function addBankAccount(BankAccount $bankaccount)
    {
        $this->_bankaccounts[] = $bankaccount;
    }
    
}

?>