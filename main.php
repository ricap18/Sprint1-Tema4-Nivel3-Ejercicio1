
<?php

  require_once "clases.php";

  $accountNumber = $_POST['accountNumber'];
  $name = $_POST['name'];
  $lastName = $_POST['lastName'];
  $balance = $_POST['balance'];
  $amount = $_POST['amount'];
  $action = $_POST['action'];
  $customer = new Account($accountNumber, $name, $lastName, $balance);
  $customer-> print(). "</br>";
 

     if ($action == "deposit" ) {
        echo "El ingreso se ha realizado correctamente, el nuevo saldo es: " . $customer->deposit($amount) . " €";
     }
     else {
        if($balance>=$amount ) {
           echo "El reintegro se ha realizado correctamente, el nuevo saldo es: " . $customer->withdraw($amount) . " €";
        }
        else {
           echo "Lo siento, no hay saldo suficiente";
        }
     }
  
?>