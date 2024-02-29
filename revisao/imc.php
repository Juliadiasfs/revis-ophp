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
    <?php 
$nome =$_POST['cxnome'];
$altura =$_POST['cxaltura'];
$peso =$_POST['cxpeso'];

$imc = $peso/($altura*$altura);
echo "Nome: ".$nome."<br/>";
echo "Resultado do IMC: ".$imc."<br/>";

if($imc < 17)
{
    echo "Muito abaixo do peso";
}
else if($imc < 18.5)
{
        echo "Abaixo  do peso";
}
else if($imc < 25)
{
    echo "Peso ideal";
}
else if($imc < 30)
{
    echo "Sobrepeso";
}
else if($imc < 35)
{
    echo "Obesidade 1";
}
else if($imc < 40)
{
    echo "Obesidade 2";
}
else 
{
    echo "Obesidade 3";
}
?></div></div>

<footer>

        <p>&copy; 2024 Julia Dias. All rights reserved.</p>
    </footer>

</body>
</html>
