
<?php
require_once "classBanc.php";

$customer = new Account(1, "Juan", "Perez Gomez", 1000);


$amount = $_POST ["amount"];

 

echo $customer->deposit($amount);
echo $customer->withdraw($amount);











?>