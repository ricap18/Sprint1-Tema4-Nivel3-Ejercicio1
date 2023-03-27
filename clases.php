<?php

class Account {

    private $accountNumber; 
    private $name; 
    private $lastName; 
    private $balance;

    public function __construct($accountNumber, $name, $lastName, $balance){
        $this->accountNumber = $accountNumber;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->balance = $balance;
    }
    public function print(){
      echo "Numero de cuenta: " . $this->accountNumber; 
      echo "</br>";
      echo "Nombre del cliente: " . $this->name . " " . $this->lastName;
      echo "</br>";
      echo "Saldo de la cuenta: " . $this->balance . " €";
      echo "</br>";
    }

    public function deposit($amount) {   //ingresar  dinero
          return $this->balance+=$amount;
    }

    public function withdraw($amount){    //retirar dinero
        if($amount <= $this->balance ){
            return $this->balance-=$amount;
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

