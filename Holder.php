<?php

class Holder
{
    private string $_firstName;
    private string $_lastName;
    private DateTime $_birthDate;
    private string $_city;
    private array $_bankAccounts;

    public function __construct(string $firstName, string $lastName, string $birthDate, string $city)
    {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_birthDate = new DateTime($birthDate);
        $this->_city = $city;
        $this->_bankAccounts = [];
    }

// ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) ************************************** 
    public function addBankAccount(BankAccount $bankAccount)
    {
     
       $this->_bankAccounts[] = $bankAccount;
    }
    public function getFirstName () // A TESTER
    {
        return $this->_firstName;
    }

    public function getLastName () // A TESTER
    {
        return $this->_lastName;
    }

    public function getBirthDate () // A TESTER
    {
        return $this->_birthDate->format("Y-m-d");
    }

    public function getCity () // A TESTER
    {
        return $this->_city;
    }

    public function getBankAccounts () // A TESTER
    {
        $result = "<ul>";
                foreach ($this->_bankAccounts as $Account) {
                    $result .= "<li>" . $Account . "</li>";
                }
                $result .= "</ul>";
        return $result;
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setFirstName ($firstName) // CHECK
    {
        $this->_firstName = $firstName;
    }

    public function setLastName ($lastName) // CHECK
    {
        $this->_lastName = $lastName;
    }

    public function setBirthDate ($birthDate) // CHECK
    {
        $this->_birthDate = new DateTime($birthDate);
    }
    
    public function setCity ($city) // CHECK
    {
        $this->_city = $city;
    }

    public function setBankAccounts (array $bankAccounts) // CHECK
    {
        $this->_bankAccounts = $bankAccounts;
    }

    // *************************************************************************************************

    public function __toString()
    {
        return "<strong>Last name : </strong>" . $this->_lastName . "<br>"
        . "<strong>First name : </strong>" . $this->_firstName . "<br>"
        . "<strong>Date of birth : </strong>". $this->getbirthDate() . "<br>"
        . "<strong>city : </strong>". $this->_city . "<br>"
        . "<strong>Bank Accounts : </strong>" . $this->getbankAccounts();
    }

    
    
}

?>