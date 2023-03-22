<?php

class Account {

    private $accountNumber; 
    private $name; 
    private $lastName; 
    private $balance;

    public function __construct($accNum, $name, $lName, $bal){
        $this->accountNumber = $accNum;
        $this->name = $name;
        $this->lastName = $lName;
        $this->balance = $bal;
    }

    public function deposit($amount) {   //ingresar  dinero
          return $this->balance+=$amount;
    }

    public function withdraw($amount){    //retirar dinero
        if($amount <= $this->balance ){
            return $this->balance-=$amount;
        }
        else {
            echo "Lo siento, no hay saldo suficiente";
        }
    }

    public function getAccountNumber() {
        return $this->accountNumber;
      }
    
      public function setAccountNumber($accountNumber) {
        $this->accountNumber = $accountNumber;
      }
    
      public function getName() {
        return $this->name;
      }
    
      public function setName($name) {
        $this->name = $name;
      }
    
      public function getLastName() {
        return $this->lastName;
      }
    
      public function setLastName($lastName) {
        $this->lastName = $lastName;
      }
    
      public function getBalance() {
        return $this->balance;
      }
    
      public function setBalance($balance) {
        $this->balance = $balance;
      }
}

?>

