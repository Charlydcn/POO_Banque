<?php

class BankAccount
{

    private string $_type;
    private float $_balance; // Je demande pas cette propriété dans les parenthèses du constructeur car je lui attribus une valeur par défaut de 0.
    private string $_currency;
    private Holder $_holder;

    public function __construct(string $type, string $currency, Holder $holder)
    {
        $this->_type = $type;
        $this->_balance =  0; // Je donne une valeur par défaut ici, ou dans la déclaration des propriétés plus haut (en dehors du constructeur)
        $this->_currency = $currency;
        $this->_holder = $holder;
        $this->_holder->addBankAccount($this); // Dans la méthode "addBankAccount" de l'holder de ce compte, ajouter le compte que l'on instancie ($this) dans le tableau bankAccounts
    }

// ************************************************ MÉTHODES ************************************************ 
    // ************************************** ACCESSEURS (getters) ************************************** 

    public function getType () // CHECK
    {
        return $this->_type;
    }

    public function getBalance () // CHECK
    {
        return $this->_balance;
    }

    public function getCurrency () // CHECK
    {
        return $this->_currency;
    }

    public function getHolder () // CHECK
    {
        return $this->_holder;
    }

    // *************************************************************************************************
    // ************************************** MUTATEURS (setters) ************************************** 

    public function setType ($type) // CHECK
    {
        $this->_type = $type;
    }

    public function setBalance ($balance) // CHECK
    {
        $this->_balance = $balance;
    }

    public function setCurrency ($currency) // CHECK
    {
        $this->_currency = $currency;
    }

    public function setHolder ($holder) // CHECK
    {
        $this->_holder = $holder;
    }

    // *************************************************************************************************

    public function Credit($credAmount) // CHECK
    {
        $this->_balance += $credAmount;
    }
    
    public function Debit($debAmount) // CHECK
    {
        $this->_balance -= $debAmount;
    }

    public function bankTransfer($transferAmount, $recipient) // CHECK
    {
        $this->Debit($transferAmount);
        $recipient->Credit($transferAmount);
    }

    public function __toString()
    {
        return "<strong>Account type : </strong>" . $this->_type . "<br>"
        . "<strong>Balance : </strong>" . number_format($this->_balance, 2, ',', ' ') . " " . $this->_currency . "<br>"
        . "<strong>Account holder : </strong>" . $this->_holder->getFirstName() . " " . $this->_holder->getLastName();
    }

}

?>