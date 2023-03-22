<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banc</title>
</head>
<body>
    <h1>Depositar o Retirar Saldo</h1>
    <form action="main.php" method="POST">

        <label for="amount">Cantidad:</label>
		<input type="number"  name="amount" required>
		<label for="deposit">Depositar:</label>
		<input type="radio"  name="deposit" value="deposit" checked>
		<label for="withdraw">Retirar:</label>
		<input type="radio"  name="withdraw" value="withdraw">
		<input type="submit" value="Enviar">
		
    </form>

</body>
</html>
