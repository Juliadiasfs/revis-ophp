<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Índice de massa corporal - Revisão</title>
</head>
<body>

    <header>
        <h1>IMC - Índice de Massa Corporal</h1>
    </header>

    <div id="container">
        <div id="corpo">
            <form action="imc.php" method="POST">
                <label>
                    Nome:<input type="text" name="cxnome">
                </label>
                <label>
                    Altura:<input type="text" name="cxaltura">
                </label>
                <label>
                    Peso:<input type="text" name="cxpeso" id="peso">
                </label>
            
                <input id="imc" type="submit" value="Calcular IMC">
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Julia Dias. All rights reserved.</p>
    </footer>

</body>
</html>
