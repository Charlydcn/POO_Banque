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
    public function getfirstName () // A TESTER
    {
        return $this->_firstName;
    }

    public function getlastName () // A TESTER
    {
        return $this->_lastName;
    }

    public function getbirthDate () // A TESTER
    {
        return $this->_birthDate->format("Y-m-d");
    }

    public function getcity () // A TESTER
    {
        return $this->_city;
    }

    public function getbankAccounts () // A TESTER
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

    public function setfirstName ($firstName) // A TESTER
    {
        $this->_firstName = $firstName;
    }

    public function setlastName ($lastName) // A TESTER
    {
        $this->_lastName = $lastName;
    }

    public function setbirthDate ($birthDate) // A TESTER
    {
        $this->_birthDate = $birthDate;
    }
    
    public function setcity ($city) // A TESTER
    {
        $this->_city = $city;
    }

    public function setbankAccounts ($bankaccount) // A FAIRE
    {
        //
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