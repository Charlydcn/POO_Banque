<?php

class Holder
{
    private string $_firstName;
    private string $_lastName;
    private DateTime $_birthdate;
    private string $_city;
    private array $_bankAccounts;

    public function __construct(string $firstname, string $lastname, string $birthdate, string $city)
    {
        $this->_firstName = $firstname;
        $this->_lastName = $lastname;
        $this->_birthdate = new DateTime($birthdate);
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

    public function getLastname () // A TESTER
    {
        return $this->_lastName;
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
        $result = "<ul>";
                foreach ($this->_bankAccounts as $account) {
                    $result .= "<li>" . $account . "</li>";
                }
                $result .= "</ul>";
        return $result;
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setFirstName ($firstname) // A TESTER
    {
        $this->_firstName = $firstname;
    }

    public function setLastName ($lastname) // A TESTER
    {
        $this->_lastName = $lastname;
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
        return "<strong>Nom : </strong>" . $this->_lastName . "<br>"
        . "<strong>Prénom : </strong>" . $this->_firstName . "<br>"
        . "<strong>Date de naissance : </strong>". $this->getBirthDate() . "<br>"
        . "<strong>Ville : </strong>". $this->_city . "<br>"
        . "<strong>Comptes bancaires : </strong>" . $this->getBankAccounts();
    }

    
    
}

?>