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
?>