<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container" >
        <h1>Depositar o Retirar Saldo</h1>
        <form class="form" action="main.php" method="POST">
           <label for="accountNumber">Numero de Cuenta:</label>
		   <input type="number"  name="accountNumber" required>
           </br>
           <label for="name">Nombre:</label>
		   <input type="text"  name="name" required>
           </br>
           <label for="lastName">Apellidos:</label>
           <input type="text"  name="lastName" required> 
           </br>
           <label for="balence">Saldo:</label>
		   <input type="number"  name="balance" required>
           </br>
           <label for="action">Acción:</label>
           <select id="action" name="action">
               <option value="deposit">Ingresar</option>
               <option value="withdraw">Retirar</option>
           </select>
           </br>
           <label for="amount">Cantidad:</label>
           <input type="number" id="amount" name="amount" step="0.01" required>
           <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>
