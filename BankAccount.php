<?php

class BankAccount
{

    private string $_type;
    private float $_balance;
    private string $_currency;
    private Holder $_holder;

    public function __construct(string $type, string $currency, Holder $holder)
    {
        $this->_type = $type;
        $this->_balance =  0;
        $this->_currency = $currency;
        $this->_holder = $holder;
        $this->_holder->addBankAccount($this);
    }

// ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) ************************************** 

    public function getType () // A TESTER
    {
        return $this->_type;
    }

    public function getBalance () // A TESTER
    {
        return $this->_balance;
    }

    public function getCurrency () // A TESTER
    {
        return $this->_currency;
    }

    public function getHolder () // A TESTER
    {
        return $this->_holder;
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setType ($type) // A TESTER
    {
        $this->_type = $type;
    }

    public function setBalance ($balance) // A TESTER
    {
        $this->_balance = $balance;
    }

    public function setCurrency ($currency) // A TESTER
    {
        $this->_currency = $currency;
    }

    public function setHolder ($holder) // A TESTER
    {
        $this->_holder = $holder;
    }

    // *************************************************************************************************

    public function Credit($credamount)
    {
        $this->_balance + $credamount;
    }
    
    public function Debit($debamount)
    {
        $this->_balance - $debamount;
    }

    public function BankTransfer() // A FAIRE
    {
        //
    }

    public function __toString()
    {
        return "<strong>Account type : </strong>" . $this->_type . "<br>"
        . "<strong>Balance : </strong>" . number_format($this->_balance, 2, ",", " ") . " " . $this->_currency . "<br>"
        . "<strong>Account holder : </strong>" . $this->_holder->getFirstName() . " " . $this->_holder->getLastName();
    }

}

?>